<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Category extends MY_Inner_Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->data['type'] = 'product_category';
        $this->data['has_order'] = TRUE;
        $this->data['has_activation'] = TRUE;
        $this->load->model(array('product_category_model', 'product_model'));
        $this->load->language('product_category');
        $this->set_title(lang('manager_title') . ' - ' . lang('manager_' . $this->data['type']));

        $this->load->config('content_page', TRUE);
        $this->data['search_fields'] = $this->get_multi_lang_fields(array('category_name'));
        $this->data['select_fields'] = array(
            'parent_id' => $this->_get_parent_categories(lang('product_category_parent_id')),
        );
    }

    protected function set_validation_rules($action) {
        $rules = array();
        $fields = $this->get_multi_lang_fields(array('category_name'));
        foreach ($fields as $field) {
            $rules[] = array('field' => $field, 'label' => lang('product_category_' . $field), 'rules' => 'trim|strip_tags|max_length[100]|required');
        }
        return $rules;
    }

    protected function prepare_object($id = FALSE) {
        $object = array(
            'parent_id' => $this->input->post('parent_id'),
        );
        $fields = $this->get_multi_lang_fields(array('category_name'));
        foreach ($fields as $field) {
            $object[$field] = $this->input->post($field);
        }

        if ($id !== FALSE) {
            $object = array_merge($object, $this->get_object($id));
            unset($object['status']);
        }

        $parent_categories = $this->product_category_model->get_where('parent_id IS NULL OR parent_id = 0', 'display_order');
        $categories = array(0 => lang('product_category_empty_parent'));
        $specific_input = array();

        if ($parent_categories['return_code'] == API_SUCCESS && !empty($parent_categories['data'])) {
            foreach ($parent_categories['data'] as $category) {
                $categories[$category['product_category_id']] = $category['category_name_' . $this->_current_lang];
            }
            $specific_input['parent_id'] = array('input' => 'dropdown', 'options' => $categories);
        } else {
            unset($object['parent_id']);
        }
        unset($object['product_category_id']);
        unset($object['display_order']);

        return array(
            'object' => $object,
            'specific_input' => $specific_input
        );
    }

    public function remove($id, $redirect = TRUE) {
        $category = $this->get_object($id);
        // Xóa tất cả product cùng category
        $products = $this->product_model->get_where(array('product_category_id' => $id));
        if ($products['return_code'] == API_SUCCESS && !empty($products['data'])) {
            $products = $products['data'];
        } else {
            $products = array();
        }

        foreach ($products as $product) {
            Modules::run('admin/product/remove', $product['product_id'], FALSE);
        }

        // Nếu là Category cấp 1 thì xóa hết category cấp 2
        if (empty($category['parent_id'])) {
            $sub_categories = $this->product_category_model->get_where(array('parent_id' => $category['product_category_id']));
            if ($sub_categories['return_code'] == API_SUCCESS && !empty($sub_categories['data'])) {
                $sub_categories = $sub_categories['data'];
            } else {
                $sub_categories = array();
            }
            foreach ($sub_categories as $sub_category) {
                $this->remove($sub_category['product_category_id'], FALSE);
            }
        }
        parent::remove($id, $redirect);
    }

    protected function get_object($id = FALSE, $parsed = FALSE) {
        $object = parent::get_object($id, $parsed);
        if ($parsed) {
            if (!empty($object['parent_id'])) {
                $parent_category = $this->product_category_model->get($object['parent_id']);
                if ($parent_category['return_code'] == API_SUCCESS && !empty($parent_category['data'])) {
                    $parent_category = $parent_category['data'];
                    $object['parent_id'] = $parent_category['category_name_' . $this->_current_lang];
                }
            } else {
                $object['parent_id'] = FALSE;
            }
            unset($object['status']);
        }
        return $object;
    }

    protected function get_all_objects($filter, $offset = 0, $sort_by = FALSE, $sort_order = 'asc') {
        $result = parent::get_all_objects($filter, $offset, 'parent_id');

        foreach ($result['objects'] as &$category) {
            if (!empty($category['parent_id'])) {
                $parent_category = $this->product_category_model->get($category['parent_id']);
                if ($parent_category['return_code'] == API_SUCCESS && !empty($parent_category['data'])) {
                    $parent_category = $parent_category['data'];
                    $category['parent_id'] = $parent_category['category_name_' . $this->_current_lang];
                }
            } else {
                $category['parent_id'] = FALSE;
            }
        }
        return $result;
    }

    protected function handle_move($id, $direction = 'up', $filter_by = FALSE) {
        parent::handle_move($id, $direction, 'parent_id');
    }

    /**
     * List tất cả danh mục Sản phẩm ra để select
     * @return type
     */
    private function _get_parent_categories($extra_select = FALSE) {
        $product_categories = array();
        if (!empty($extra_select)) {
            $product_categories[""] = $extra_select;
        }

        $main_categories = $this->product_category_model->get_where('parent_id IS NULL OR parent_id = 0', 'display_order');
        if ($main_categories['return_code'] == API_SUCCESS && !empty($main_categories['data'])) {
            $main_categories = $main_categories['data'];
            foreach ($main_categories as $main_category) {
                $product_categories[$main_category['product_category_id']] = $main_category['category_name_' . $this->_current_lang];
            }
        }

        return $product_categories;
    }

    protected function create_update($id = FALSE) {
        $this->data['action'] = ($id == FALSE ? 'create' : 'update');
        if ($id !== FALSE) {
            $this->data['id'] = $id;
        }
        $this->data['form_data'] = $this->prepare_object($id);
        $validation_rules = $this->set_validation_rules($this->data['action']);
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run()) {
            $params = $this->handle_post_inputs();
            if (is_string($params)) {
                set_notice_message('danger', $params);
            } else {
                $this->handle_create_update_object($params, $this->data['action'], $id);
            }
        }
        if ($message_error = validation_errors()) {
            set_notice_message('danger', $message_error);
        }
        if ($id == FALSE) {
            $id = '';
        }
        $this->data['main_nav'] = $this->_main_nav($this->data['action'], $id);
        $this->load->view('create_update_view', $this->data);
    }

}
