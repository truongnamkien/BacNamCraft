<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo PAGE_TITLE . (empty($PAGE_TITLE) ? '' : ' - ' . $PAGE_TITLE); ?></title>

        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=1024, initial-scale=0.4" />

        <script type="text/javascript">
			var _asset_url = '<?php echo asset_url(); ?>';
        </script>

		<?php echo asset_link_tag('css/reset.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/default.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/templates.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/templates2.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/templates3.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/jquery/jquery-ui-1.8.16.custom.css'); ?>
		<?php echo asset_link_tag('css/colorbox/colorbox.css'); ?>

        <!-- jQuery -->
		<?php echo asset_js('js/jquery/jquery-1.8.3.min.js'); ?>
		<?php echo asset_js('js/jquery/jquery-ui-1.9.2.custom.min.js'); ?>
		<?php echo asset_js('js/jquery/jquery.colorbox-min.js'); ?>
		<?php echo asset_js('js/jquery/jquery.carouFredSel.js'); ?>
		<?php echo asset_js('js/core.js'); ?>

		<?php echo Modules::run('navigator/_pagelet_meta_tag'); ?>
        <link href="<?php echo asset_url('images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon" />

        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="imagetoolbar" content="no" />
    </head>

    <body class="home-underlay newLayout k2">
        <div id="fb-root"></div>
        <script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
        </script>

		<div class="bgWrapper">
			<div id="Core">
				<div style="height: 115px;" id="Header" class="en">
					<div id="LogoWrapper">
						<a href="<?php echo site_url(); ?>">
							<span class="screen-reader-only">Target</span>
						</a>
					</div>

					<div class="menuWrap">
						<?php echo Modules::run('navigator/_pagelet_main_menu'); ?>
					</div>


					<div class="globalMenuContainer changeCartBg">
						<div class="menuBox active">
							<a href="#" class="triggerHover">shop all categories</a>
						</div>

						<div id="userWrapper">
							<?php echo Modules::run('search/_search_form'); ?>

                            <div id="cart_mini">
								<?php echo Modules::run('product/_pagelet_cart_content'); ?>
                            </div>
						</div>
					</div>
				</div>

				<div id="Content">
					<?php //echo $PAGE_CONTENT; ?>
				</div>
				<div class="clear"></div>

				<div id="Footer" class="dpn">







					<!-- Constants for My Recs - Start-->



					<!-- generated on Wed Oct 08 01:19:51 EDT 2014 : 03h2073 [buildVersion: R10_09192014.4]-->



					<!-- Constants for My Recs - end-->

					<div id="PageNotes" class="pagenotes">
						<div id="linksContainer">
							<div id="rvCore"> 
								<h2 class="screen-reader-only">Additional Site Navigation</h2>
								<div class="recentNavView"></div>   

								<div id="RecentViewItems" style="width:1px;height:1px">
									<div class="summary">
										<p class="counter"></p>
										<ul class="items"></ul>   
										<p class="message">as you view items on Target.com, we'll keep track of them here.</p></div>
									<div style="display: none; visibility: hidden;" class="items-set"></div>
								</div>  

								<div class="myRecsLinks"><a href="/MyRecommendations?lnk=fnav_rvi_myrecs" title="my recommendations">my recommendations</a></div>

							</div>
							<div></div>	



							<!--  Open Container | Content ID: DefaultLinkFooter | TGT iH | KRK | Updated: 04/09/14 | URL: http://static.targetimg1.com/2013/iH/02/footer/0206/DefaultLinkFooter.html 
			JS global minificaiton-->

							<div id="defaultLinks">
								<div class="leftMenu first"> <a name="additionalLinks"></a>
									<h3>Target stores</h3>
									<div class="submenu">
										<ul>
											<li><a href="http://www.target.com/store-locator/find-stores#?lnk=fnav_t_spc_1_1&amp;intc=28073|null&amp;intc=28073|null">find a store</a></li>
											<li><a href="http://www.target.com/c/clinic-health/-/N-54x94#?lnk=fnav_t_spc_1_2&amp;intc=28073|null">clinic</a></li>
											<li><a href="http://www.target.com/spot/optical#?lnk=fnav_t_spc_1_3&amp;intc=28073|null&amp;intc=28073|null">optical</a></li>
											<li><a href="http://www.target.com/c/pharmacy-health/-/N-54y52#?lnk=fnav_t_spc_1_4&amp;intc=28073|null&amp;intc=28073|null">pharmacy</a></li>
											<li><a href="http://www.targetphoto.com#?lnk=fnav_t_spc_1_5&amp;intc=28073|null&amp;intc=28073|null">photo</a></li>
											<li><a href="http://www.target.com/c/target-portrait-studio-ways-to-shop/-/N-559ua#?lnk=fnav_t_spc_1_6&amp;intc=28073|null&amp;intc=28073|null">portrait studio</a></li>
										</ul>
									</div>
								</div>
								<div class="leftMenu">
									<h3>about Target</h3>
									<div class="submenu">
										<ul>
											<li><a href="http://corporate.target.com/#?lnk=fnav_t_spc_1_7&amp;intc=28073|null&amp;intc=28073|null">company info &amp; press</a></li>
											<li><a href="http://corporate.target.com/careers#?lnk=fnav_t_spc_1_8&amp;intc=28073|null&amp;intc=28073|null">careers</a></li>
											<li><a href="http://investors.target.com/phoenix.zhtml?c=65828&amp;p=irol-IRHome#?lnk=fnav_t_spc_1_9&amp;intc=28073|null&amp;intc=28073|null">investor relations</a></li>
											<li><a href="http://corporate.target.com/corporate-responsibility#?lnk=fnav_t_spc_1_10&amp;intc=28073|null&amp;intc=28073|null">corporate responsibility</a></li>
											<li><a href="http://affiliate.target.com/?lnk=fnav_t_spc_1_11&amp;intc=28073|null">affiliates</a></li>
											<li><a href="http://www.abullseyeview.com#?lnk=fnav_t_spc_1_12&amp;intc=28073|null&amp;intc=28073|null">A Bullseye View</a></li>
											<li><a href="http://www.target.com/spot/team-services#?lnk=fnav_t_spc_1_13&amp;intc=28073|null&amp;intc=28073|null">team member services</a></li>
											<li><a href="http://www.target.com/c/bullseye-shop/-/N-5xtb9#?lnk=fnav_t_spc_1_14&amp;intc=28073|null&amp;intc=28073|null">Bullseye Shop</a></li>
											<li><a href="https://targetmedianetwork.target.com#?lnk=fnav_t_spc_1_15&amp;intc=28073|null&amp;intc=28073|null">advertise with us</a></li>
										</ul>
									</div>
								</div>
								<div class="leftMenu">
									<h3>ways to save</h3>
									<div class="submenu">
										<ul>
											<li><a href="http://weeklyad.target.com#?lnk=fnav_t_spc_1_16&amp;intc=28073|null&amp;intc=28073|null">weekly ads</a></li>
											<li><a href="http://coupons.target.com/mcp/pd.cfm?encp=bw3Edh8NsU3vzmfu%2BCqxk1gE5kAdfbx6dC45DH8m6FuvNQDwYVl3xOH31DkRj79yzb%2BSNmiA400y%0D%0ALhj%2FXmLy9zzvNW3gItgBqLI6rw64%2FkWKY9O5GIrSJTepqrrRVKgryKJ1kkXm6v4vKD0bkrAj4w%3D%3D#?lnk=fnav_t_spc_1_17&amp;intc=28073|null&amp;intc=28073|null">coupons</a></li>
											<li><a href="http://www.target.com/c/clearance/-/N-5q0ga#?lnk=fnav_t_spc_1_18&amp;intc=28073|null&amp;intc=28073|null">clearance</a></li>
											<li><a href="http://www.target.com/np/all-the-deals/-/N-5tdty#?lnk=fnav_t_spc_1_19&amp;intc=28073|null&amp;intc=28073|null">all the deals</a></li>
										</ul>
									</div>
								</div>
								<div class="leftMenu">
									<h3>help</h3>
									<div class="submenu">
										<ul>
											<li><a href="http://help.target.com/help/#?lnk=fnav_t_spc_1_20&amp;intc=28073|null">see all help</a></li>
											<li><a href="http://help.target.com/help/subcategoryarticle?parentcat=Compliance&amp;childcat=Accessibility#&amp;lnk=fnav_t_spc_1_21&amp;intc=28073|null">accessibility</a></li>
											<li><a href="http://www.target.com/webapp/wcs/stores/servlet/ManageOrder#?lnk=fnav_t_spc_1_22&amp;intc=28073|null&amp;intc=28073|null">track an order</a></li>
											<li><a href="http://help.target.com/help/subcategoryarticle?parentcat=Returns+%26+Exchanges&amp;childcat=Start+an+online+return#&amp;lnk=fnav_t_spc_1_23&amp;intc=28073|null">return an item</a></li>
											<li><a href="http://www.target.com/c/pickup-in-store/-/N-55fqz#?lnk=fnav_t_spc_1_24&amp;intc=28073|null&amp;intc=28073|null">store pickup</a></li>
											<li><a href="http://help.target.com/help/subcategoryarticle?parentcat=Delivery+Options&amp;childcat=Free+shipping#&amp;lnk=fnav_t_spc_1_25&amp;intc=28073|null">shipping information</a></li>
											<li><a href="http://help.target.com/help/productrecallpage?parentcat=News+%26+Safety&amp;childcat=Product+recalls#&amp;lnk=fnav_t_spc_1_26&amp;intc=28073|null">product recalls</a></li>
											<li><a href="http://www.target.com/spot/size-charts#?lnk=fnav_t_spc_1_27&amp;intc=28073|null&amp;intc=28073|null">size charts</a></li>
											<li><a href="http://help.target.com/help/ContactUs?Con=ContactUs#&amp;lnk=fnav_t_spc_1_28&amp;intc=28073|null">contact us</a></li>
										</ul>
									</div>
								</div>
								<div class="rightMenu">
									<h3>the REDcard</h3>
									<div class="submenu">
										<ul>
											<li><a href="http://www.target.com/redcard/main#?lnk=fnav_t_spc_1_29&amp;intc=28073|null&amp;intc=28073|null">card benefits</a></li>
											<li><a href="http://www.target.com/redcard/main#?lnk=fnav_t_spc_1_30&amp;intc=28073|null&amp;intc=28073|null">how to apply</a></li>
											<li><a href="https://rcam.target.com#?lnk=fnav_t_spc_1_31&amp;intc=28073|null&amp;intc=28073|null">manage my REDcard</a></li>
										</ul>
									</div>
									<div id="redcard">
										<p class="S_Gray_Dark_Bold_16px_333333">5% off</p>
										<p><span class="S_Black_10px_000000">plus everyday free shipping</span></p>
										<a href="http://www.target.com/redcard/main#?lnk=fnav_t_spc_1_32&amp;intc=28073|null&amp;intc=28073|null">apply now</a> </div>
								</div>
							</div>
							<!--  End Open Container  -->

						</div>
						<div>

						</div>	


						<!-- Start | GlobalFooter | TGT iH | KRK | 09/09/14 | http://static.targetimg1.com/2014/iH/09/footer/0909/GlobalFooter.html -->
						<div class="footerlogo">
							<a href="http://www.target.com/#?lnk=fnav_t_spc_2_1&amp;intc=28073|null"><span class="screen-reader-only">Target</span></a>
						</div> 
						<p class="quicklinks globalfooter-quicklinks">
							<!--<a href="#30#?lnk=fnav_t_spc_2_2&intc=28073|null">privacy policy</a> |--> 
							<!-- Turn On/Off the Updated code -->
							<a href="#30#?lnk=fnav_t_spc_2_3&amp;intc=28073|null">privacy policy</a> | 
							<a href="#31#?lnk=fnav_t_spc_2_4&amp;intc=28073|null">cookies</a> | 
							<a href="#32#?lnk=fnav_t_spc_2_5&amp;intc=28073|null">terms &amp; conditions</a> | 
							<a href="#33#?lnk=fnav_t_spc_2_6&amp;intc=28073|null">CA privacy rights</a> | 
							<a href="http://help.target.com/help/subcategoryarticle?childcat=CA+Transparency+in+Supply+Chains+Act&amp;parentcat=Compliance#&amp;lnk=fnav_t_spc_2_7&amp;intc=28073|null">CA transparency in supply chains act </a> | 
							<a href="http://help.target.com/help/subcategoryarticle?parentcat=Policies+%26+Guidelines&amp;childcat=Website+technical+guidelines#&amp;lnk=fnav_t_spc_2_8&amp;intc=28073|null">about this site</a>
						</p>
						<p class="copyInfo">© 2014 Target Brands, Inc. Target, the Bullseye Design and Bullseye Dog are trademarks of Target Brands, Inc. All rights reserved. </p>
						<!-- End | GlobalFooter | TGT iH | KRK | 09/09/14 -->

						<div></div>


						<!--  Start OC | QuickLinkFooter | TGT iH | KRK | 04/09/14 | http://static.targetimg1.com/2013/iH/02/footer/0206/QuickLinkFooter.html  -->
						<div id="QuickLinkFooter" class="footerLine"></div>

						<div class="quicklinks deep">
							<h3 class="screen-reader-only">Quick Links</h3>
							<h4>view all products by:</h4>
							<ul>
								<li><a href="http://www.target.com/tdir/p/women/-/N-5xtd3#?lnk=fnav_t_spc_3_1" title="womens">womens</a></li>
								<li><a href="http://www.target.com/tdir/p/mens/-/N-5xu2r#?lnk=fnav_t_spc_3_2" title="mens">mens</a></li>
								<li><a href="http://www.target.com/tdir/p/baby/-/N-5xtly#?lnk=fnav_t_spc_3_3" title="baby">baby</a></li>
								<li><a href="http://www.target.com/tdir/p/kids/-/N-5xtyp#?lnk=fnav_t_spc_3_4" title="kids">kids</a></li>
								<li><a href="http://www.target.com/tdir/p/home/-/N-5xtvd#?lnk=fnav_t_spc_3_5" title="home">home</a></li>
								<li><a href="http://www.target.com/tdir/p/home-bath/-/N-5xtvc#?lnk=fnav_t_spc_3_6" title="bath">bath</a></li>
								<li><a href="http://www.target.com/tdir/p/home-bedding/-/N-5xtv4#?lnk=fnav_t_spc_3_7" title="bedding">bedding</a></li>
								<li><a href="http://www.target.com/tdir/p/home-home-appliances/-/N-5xtuu#?lnk=fnav_t_spc_3_8" title="appliances">appliances</a></li>
								<li><a href="http://www.target.com/tdir/p/home-home-décor/-/N-5xtub#?lnk=fnav_t_spc_3_9" title="decor">décor</a></li><br>
								<li><a href="http://www.target.com/tdir/p/home-kitchen-dining/-/N-5xtsc#?lnk=fnav_t_spc_3_10" title="kitchen">kitchen</a></li>
								<li><a href="http://www.target.com/tdir/p/home-patio-garden/-/N-5xtq9#?lnk=fnav_t_spc_3_11" title="patio and garden">patio and garden</a></li>
								<li><a href="http://www.target.com/tdir/p/furniture/-/N-5xtnr#?lnk=fnav_t_spc_3_12" title="furniture">furniture</a></li>
								<li><a href="http://www.target.com/tdir/p/electronics/-/N-5xtg6#?lnk=fnav_t_spc_3_13" title="electronics">electronics</a></li>
								<li><a href="http://www.target.com/tdir/p/toys/-/N-5xtb0#?lnk=fnav_t_spc_3_14" title="toys">toys</a></li>
								<li><a href="http://www.target.com/tdir/p/health-beauty/-/N-5xu1n#?lnk=fnav_t_spc_3_15" title="health and beauty">health and beauty</a></li>
								<li><a href="http://www.target.com/tdir/p/sports-outdoors/-/N-5xt85#?lnk=fnav_t_spc_3_16" title="sports">sports</a></li><br>
							</ul>
							<ul>
								<li><a href="http://www.target.com/np/more/-/N-5xsxf#?lnk=fnav_t_spc_3_17" title="shop all departments">shop all departments</a></li> <br>
								<li><a href="http://m.target.com#?lnk=fnav_t_spc_3_18" title="view mobile version">view mobile version</a></li>
							</ul>
						</div>
						<!--  End OC  -->	

					</div>
					<div class="endpage"></div>
					<!-- Session timeout message -->

				</div>
			</div>
		</div>


































		<?php echo Modules::run('navigator/_pagelet_header_bar'); ?>

        <div id="demoContainer" class="dpn">
            <div class="wapper_body">
                <div class="header">
                    <div class="wrapper_head">
                        <div class="logo_div">
                            <a class="logo mt20" href="<?php echo site_url(); ?>">
                                <img src="<?php echo asset_url('images/logo.png'); ?>" alt="<?php echo PAGE_TITLE; ?>" />
                            </a>
                        </div>
                        <div class="language">
							<div class="hotline">
								<?php echo Modules::run('navigator/_pagelet_hotline'); ?>
							</div>
                        </div>
                    </div>
                </div>

                <div class="maincontent">
                    <div class="wrap">
						<?php //echo Modules::run('navigator/_pagelet_contact'); ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="bottom">
                    <div class="mnfooter">
                        <div class="menu_footer">
							<?php echo Modules::run('navigator/_pagelet_main_menu', 'bottom'); ?>
                        </div>
                    </div>  

					<?php echo Modules::run('navigator/_pagelet_footer'); ?>
                </div>

				<?php //echo Modules::run('navigator/_pagelet_connect'); ?>
				<?php //echo Modules::run('navigator/_pagelet_subscribe'); ?>
				<?php //echo Modules::run('navigator/_pagelet_communication'); ?>
            </div>
        </div>
    </body>
</html>

