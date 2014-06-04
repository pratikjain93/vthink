   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>KA$H FX <?php echo isset($title) ? ":: $title" : ""?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--here determinate the active  page!-->
    <?php $segment_id = $this->uri->segment(1);

	 switch($segment_id){
	    case 'home':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	       $page_css = base_url() . 'public/css/home.css';
	    break;

	    case 'products':  $current_class = array('home' => '', 'products' => 'current', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	       $page_css = base_url() . 'public/css/products.css';
	    break;

	    case 'history':  $current_class = array('home' => '', 'products' => '', 'history' => 'current', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	      $page_css = base_url() . 'public/css/history.css';
	    break;

	    case 'clearing':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => 'current', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
		 $page_css = base_url() . 'public/css/clearing.css';
	    break;

	    case 'about':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => 'current', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	    	 $page_css = base_url() . 'public/css/about.css';
	    break;

	    case 'trading_technology':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => 'current', 'contact' => '', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	    	 $page_css = base_url() . 'public/css/trading_technology.css';
	    break;

	    case 'contact':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => 'current', 'create_account' => '', 'ewallet' => '', 'testimonial' => '');
	    	 $page_css = base_url() . 'public/css/contact.css';
	    break;

	    case 'create_account':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => 'current', 'ewallet' => '', 'testimonial' => '');
	    	 $page_css = base_url() . 'public/css/create_account.css';
	    break;

	    case 'new_account':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => 'current', 'ewallet' => '', 'testimonial' => '');
	    $page_css = base_url() . 'public/css/reg_payment.css';
	    break;
	    
	    case 'ewallet':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => 'current', 'testimonial' => '');
		$page_css = base_url() . 'public/css/ewallet.css';
		break;
		
		case 'testimonial':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => '', 'testimonial' => 'current');
		$page_css = base_url() . 'public/css/testimonial.css';
		break;
	    
	    default:  {$current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '', 'trading_technology' => '', 'contact' => '', 'ewallet' => '', 'testimonial' => '');
	    	    $page_css = base_url() . 'public/css/home.css';
	    }
	 }
    ?>

    <!--CSS -->
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/main.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/common.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/submenus.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo $page_css; ?>" media='screen' />
			<!-- css added by sanjay on 04-07-2011-->
			 <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/tab/basic.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/tab/jquery-tabs.css" media='screen' />
    <!--JavaScripts-->
        <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.5.1.js" /></script>
        <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.form.js" /></script>
        <script type="text/javascript" src="<?php echo base_url()?>public/js/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>public/js/main_form.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>public/js/common.js"></script>
		<!-- js added by sanjay on 04-07-2011-->
			<script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery.js" /></script>
		    <script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery-ui.js"></script>
		    <script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery_002.js"></script>
	</meta>

</head>
<body>
    <div class="wraper">

        <div id="page-header">
	    <?php $base_url = base_url(); echo anchor('home', '<img src="' . $base_url . 'public/images/kashfx-logo.gif" alt="KA$H FX" />', array('title' => '... to Home Page', 'class' => 'top-logo'))?>
            <div class="top-right-panel">
            <div class="language-bar">				
                        <div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'zh-CN,en,fr,ru,es',
    autoDisplay: false,
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
				<div class="login-form">
					<?php
						if($logged){
                                                    if($this->uri->segment(1)!='home')
                                                    {
                                                       // $this->load->view("login_forex");
                                                        //$this->load->view("login_ewallet");
                                                    }
                                                    $this->load->view("user_info_view");
                                               }
					?>
				</div>
				
			</div>
            <br class="clear" />
        </div>
<div class="login_ewallet">
   
            <?php
                    if(!$logged){
                        if($this->uri->segment(1)!='home')
                        {
                            $this->load->view("login_ewallet");
                            $this->load->view("login_international");
                            $this->load->view("login_forex");
//                            $this->load->view("login_compliance");
                        }
                   }
            ?>
 
</div>


	<div id="top-menu">
            <ul>
                <li><?php echo anchor('home', "Home", array('title' => 'Home', 'class' => $current_class['home'] ))?>
				</li>
				<li><?php echo anchor('about', "ABOUT US", array('title' => 'ABOUT US', 'class' => $current_class['about'] ))?>
				</li>
				<li><?php echo anchor('contact', "CONTACT US", array('title' => 'CONTACT US', 'class' => $current_class['contact']))?>
				</li>
				<li><?php echo anchor('new_account', "New Account", array('title' => 'New Account', 'class' => $current_class['create_account']))?>
				</li>
				<li><?php echo anchor('ewallet', "eWallet", array('title' => 'eWallet', 'class' => $current_class['ewallet'], 'id' => 'ewallet_menu'))?>
				</li>
				<li><?php echo anchor('testimonial', "Testimonial", array('title' => 'Testimonial', 'class' => $current_class['testimonial']))?>
				</li>
                                <li><?php echo anchor('api_resources', "API Resources", array('title' => 'API Resources' ))?>
                                </li>
                                <li><?php echo anchor('management_team', "Management Team", array('title' => 'Management Team' ))?>
                                </li>
                                <li><?php echo anchor('compliance/login', "Compliance Login", array('title' => 'Compliance Login' ))?>
                                </li>
                                <li><?php echo anchor('agent/login', "Agent Login", array('title' => 'Agent Login' ))?>
                                </li>
                                 <li><?php echo anchor('staff/login', "Staff", array('title' => 'Staff Login' ))?>
                                </li>
            </ul>
            <div class="top-menu-edge"></div>
        </div>


<!--		here are the submenus-->
		<div class="bottombar" id="dvBottombar">
			<ul id="secondary">
			<?php foreach ($submenus as $key => $val):?>
					<li>
						<div class="tab_container">
							<div class="mleft">
							</div>
							<div class="tab_content">
								<div class="mright">
								</div>
								<?php 
								$submenu_id = $this->uri->segment(1);
								//$values = explode("/", $val);

								if($val == $submenu_id){
									echo anchor($val, $key, "class='tab_link current'");
								}
								else{
									echo anchor($val, $key, "class='tab_link'");
								}
								?>
							</div>
						</div>
					</li>
			<?php endforeach;?>	
			</ul>
		</div>

  <div id="main-section">
            <div class="col-main">
			
               <table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td colspan="3">
							<div class="top_middle">
								<div class="top_left" ></div>
								<div class="top_right"></div>
							</div>
						</td>
					</tr>
					
					<tr><td class="mainContent">
						<div id="mainContainer">
						<div class="left"></div>
						<div class="right"></div>
						
						<h1>Create an account at KashFX.com</h1>
						
						
						
						<p>
			      			* Required information
						</p>
			  			<div id='message'></div>
  			
						<div id='space'></div>
						
						<!-- here comes the main content for each step of the registration!-->
						<?php echo $body;?>
						<!--this is the end container for the main content-->
						
						</div>
					</td>
					</tr>
					
					<tr>
						<td colspan="3">
							<div class="bottom_middle">
								<div class="bottom_left" ></div>
								<div class="bottom_right"></div>
							</div>
						</td>
					</tr>
				</table>
			</div>


            <div class="col-right">
                     <!--<div class="social-links">-->
<?php $this->load->view('social_links');?>
                    <!--</div>-->
                    <br class="clear" />
                    <div>
                        <h2>Useful Links</h2>
                        <p>
                            <a href="http://www.kashmart.com" target='_blank' title="www.kashmart.com">KA$HMART</a><br />
                            <span class="disabled">www.kashmart.com</span>
                        </p>
                        <p>
                            <a href="http://www.kashmartbank.com" target='_blank' title="www.kashmart.com">KA$MARTBANK</a><br />
                            <span class="disabled">www.kashmartbank.com</span>
                        </p>
                    </div>

                    <div class="rounded-corners-container fog">
                        <div class="top-row"><div>&nbsp;</div></div>
                        <div class="middle-row">
                            <h1>Contact Information</h1>
                            <p>Currently, these are Kash Mart's International offices contact details.
                            Below are some of the various countries we operate.</p>
                            <p>
                            Global Head Quarters<br />
                            Kash Mart International<br />
                            Edificio Ana Victoria, Local B-4 Calle Melitón Martín,<br />
                            Chitré, Herrera República de Panamá
                            </p>
                            <p>
					<span class="black contacts-label">Merchant Support:</span> (877) 290-8740
				</p>
                                
				<p>
					<span class="black contacts-label">KashFX Japan:</span> +81 345782191
				</p>
                                
				<p>
					<span class="black contacts-label">KashFX Mexico:</span> +52 3346242979
				</p>
                                
                                <p>
					<span class="black contacts-label">KashFX Panama:</span> +507 8339057
				</p>
                                
				<p>
					<span class="black contacts-label">KashFX Switzerland:</span> +41 435081066
				</p>
                                
                                <p>
					<span class="black contacts-label">KashFX UK Support:</span> +44 2033181302
				</p>
                        </div>
                        <div class="bottom-row"><div>&nbsp;</div></div>
                    </div>

            </div>
        </div>
        <div id='loader'>
        		  <div id='loaderimg'><img src='<?php echo base_url() . "public/images/loading.gif"; ?>' /></div>
        		  	    </div>
        <div id="page-footer">
            <span>&copy; Copyright KASHFX 2012-2013. All rights reserved.</span>
        </div>

    </div>

</body>
</html>
