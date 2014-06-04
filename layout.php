<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>KA$H FX <?php echo isset($title) ? ":: $title" : ""?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


		<!--here determinate the active  page!-->
		<?php $segment_id = $this->uri->segment(1);
		switch($segment_id){
			case 'home':  $current_class = array('home' => "current", 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','product_test' => '', 'testimonial' => '');
		       $page_css = base_url() . 'public/css/home.css';
		    break;
	
		    case 'products':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
		    
		    case 'cocoa_coffee':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
	
		    case 'cotton':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
	
		    case 'cocoa_swap':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
	
		    case 'electricity':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
	
		    case 'natural_gas':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		       $page_css = base_url() . 'public/css/products.css';
		    break;
	
		    case 'history':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		      $page_css = base_url() . 'public/css/history.css';
		    break;
	
		    case 'clearing':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
			 $page_css = base_url() . 'public/css/clearing.css';
		    break;
	
		    case 'about':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => 'current',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		    	 $page_css = base_url() . 'public/css/about.css';
		    break;
	
		    case 'trading_technology':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		    	 $page_css = base_url() . 'public/css/trading_technology.css';
		    break;
			
			case 'prepaid_fx_card':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => 'current', 'blog' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => 'current','testimonial' => '');
		    $page_css = base_url() . 'public/css/prepaid_fx_card.css';
		    break;
			
			case 'blog':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => 'current', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => 'current','testimonial' => '');
		    $page_css = base_url() . 'public/css/blog.css';
		    break;
	
		    case 'contact':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => 'current', 'create_account' => '', 'ewallet' => '','testimonial' => '');
		    	 $page_css = base_url() . 'public/css/contact.css';
		    break;
	
		    case 'create_account':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => 'current', 'ewallet' => '','testimonial' => '');
		    	 $page_css = base_url() . 'public/css/create_account.css';
		    break;
	
		    case 'new_account':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => 'current', 'ewallet' => '','testimonial' => '');
		    $page_css = base_url() . 'public/css/reg_payment.css';
		    break;
		    
		    case 'ewallet':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => 'current','testimonial' => '');
		    $page_css = base_url() . 'public/css/ewallet.css';
		    break;
			
			case 'testimonial':  $current_class = array('home' => '', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => '','testimonial' => 'current');
		    $page_css = base_url() . 'public/css/testimonial.css';
		    break;
		    
		    case 'intl_payment':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => '','testimonial' => '');
		    $page_css = base_url() . 'public/css/payments.css';
		    break;
	
		    case 'merchants':  $current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '', 'blog' => '', 'contact' => '', 'create_account' => '', 'account' => '', 'ewallet' => '','testimonial' => '');
		    $page_css = base_url() . 'public/css/merchants.css';
		    break;
	
		    default:  {
	    		$current_class = array('home' => 'current', 'products' => '', 'history' => '', 'clearing' => '', 'about' => '',  'trading_technology' => '', 'prepaid_fx_card' => '',  'blog' => '', 'contact' => '', 'ewallet' => '', 'product_test' => '', 'create_account' => '','testimonial' => '');
	    	    $page_css = base_url() . 'public/css/home.css';
		    }
			
		}


		?>
		    <!--CSS -->
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/main.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo $page_css; ?>" media='screen' />
            <?php if($logged):?> 
	            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/user_common.css" media='screen' />
            <?php else:?>
			<?php endif;?>
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/common.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/submenus.css" media='screen' />
            <!-- css added by sanjay on 04-07-2011-->
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/tab/basic.css" media='screen' />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/tab/jquery-tabs.css" media='screen' />
            <!-- JavaScripts -->
            <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.5.1.js" ></script>
            <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.form.js" ></script>
            <script type="text/javascript" src="<?php echo base_url()?>public/js/common.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>public/js/form_login.js"></script>
            <!-- js added by sanjay on 04-07-2011-->
            <script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery-ui.js"></script>
            
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/css-small-image-slide.css"  />
            <script type="text/javascript" src="<?php echo base_url()?>public/js/slides.min.jquery.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>public/tab/jquery_002.js"></script>
            
            <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.simplyscroll.js"></script> 
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/jquery.simplyscroll.css"  media="all"  />   
	
            <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" />
            <link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/contenttab.css" media='screen' /> 
            <script language="javascript"> 
                function toggle() {
                   var ele = document.getElementById("toggleText");
                   var text = document.getElementById("displayText");
                if(ele.style.display == "block") {
                        ele.style.display = "none";		
                 }
                else {
                        ele.style.display = "block";		
                }
            } 
            </script>
            
            <script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
//			$('#slides1').slides({
//				preload: true,
//				preloadImage: 'img/loading.gif',
//				play: 5000,
//				pause: 2500,
//				hoverPause: true
//			});
		});
	</script>
       <?php
        if($this->uri->segment(1) == "merchants")
        {
       
        ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#content table').remove();
                });
            </script>
       <?php
        }
       ?>
            
            
<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>	
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
			<?php $pages = array('cocoa_coffee', 'cotton', 'cocoa_swap', 'electricity', 'natural_gas');?>
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

								if(in_array($submenu_id, $pages)){
									$submenu_id = "products";
								}
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
		<!-- code for currency rate marque created by sanjay on 02-07-2011-->
		
		
		<?php
				/*$marquee = file_get_contents('http://kashmart.ca/en/services/index.php');
				$ar = explode("<!-- marque start-->",$marquee);
				$ar1= explode("<!-- marque end -->",$ar[1]);
				//echo $ar1[0];
				$js_ar = explode("<!-- marque js start-->",$ar1[1]);
				
				$js_final = explode("<!-- marque js end-->",$js_ar[1]);
				$jsr = explode("var string1 ='...",$js_final[0]);
				$jsr1 = explode("....';",$jsr[1]);
				$js_result = explode("....",$jsr1[0]);*/
				
				
         ?> 
		 <!--<MARQUEE WIDTH=100% BEHAVIOR=SCROLL DIRECTION=RIGHT scrollamount="2" scrolldelay="1" >
		 <table>
		    <tr>
			  <?php
			 /* $m=0;
			   foreach($js_result as $r){
				       if($m%2==0){
					  		echo "<td style='background:red;font-size:10px;color:#fff;'>".$r."</td><td>&nbsp;&nbsp;</td>";
					    }else{
						    echo "<td style='background:yellow;font-size:10px;color:green;'>".$r."</td><td>&nbsp;&nbsp;</td>";
						}
					$m++;
				}*/
			  ?>
			  </tr>
			  </table>
			  </MARQUEE>-->
		
		<!-- here comes the main content for each page  !-->
<?php
                if($this->uri->segment(1) == "merchants" or $this->uri->segment(1) == "ewallet"){
                    
      
    ?>
<div id="homeBanner">
		<div id="container">
		<div id="example">			
			<div id="slides">
				<div class="slides_container">
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/banner_1.png" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/banner_2.png" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/banner_3.png" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/bettingbanner_2.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/Casinobanner_1.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/ewalletbanner.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/merchantbanner_1.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/gaming_banner.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/merchantbanner.jpg" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/casino.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant1.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/casino1.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant2.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant3.gif" width="670" height="280" alt="Slide 1"/></a>
                                        <a href="" title="" ><img src="<?php echo base_url();?>public/images/casino2.gif" width="670" height="280" alt="Slide 1"/></a>
<!--					<a href="" title="" ><img src="<?php echo base_url();?>public/images/casino3.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant4.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/casino4.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/instant_merchant5.gif" width="670" height="280" alt="Slide 1"/></a>
					<a href="" title="" ><img src="<?php echo base_url();?>public/images/casino5.gif" width="670" height="280" alt="Slide 1"/></a>-->
					
					
					
				</div>
				<!--
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
				-->
			</div>
			
			
		</div>
	
	<img src="<?php echo base_url();?>public/images/banner_bg.png" width="670" height="18" style="position:relative; left:-5px; top:-38px;" />
	</div>
	<div id="smallimageslidebox">
	<ul style="float:right;">
<?php

  $current_dir = $_SERVER['DOCUMENT_ROOT']."/imageslide/";     
  $dir = opendir($current_dir);       
  
  while ($file = readdir($dir))            
  {
		 
    $parts = explode(".", $file);                   
    if (is_array($parts) && count($parts) > 1) 
	{    
        $extension = end($parts);         
		if ($extension != "" ) 
		{
             $imgsrc= base_url()."imageslide/$file" ;    
?>
	  
   			<li><img src="<?php echo $imgsrc; ?>" width="310" height="280" /></li>
<?php 
		}//if2
     }//if1
  }//while 
  closedir($dir);        
			
?>
      
          </ul> 
		  </div>
	
  
</div>
		<?php echo $body;?>
  <?php
                }else{
                    echo $body;
                }
  ?>

		<div id="page-footer">
			<span>&copy; Copyright KASHFX 2012-2013. All rights reserved.</span>
		</div>
	</div>
<!-- script for currency rate marque created by sanjay on 02-07-2011 -->
<script>
$(window).load(function(){
		var pages = $('#smallimageslidebox li'), current=0;
		var currentPage,nextPage;
		var timeoutID;
		var buttonClicked=0;

		var handler1=function(){
			buttonClicked=1;
			$('#smallimageslidebox .button').unbind('click');
			currentPage= pages.eq(current);
			if($(this).hasClass('prevButton'))
			{
				if (current <= 0)
					current=pages.length-1;
				else
					current=current-1;
				nextPage = pages.eq(current);	

				nextPage.css("marginLeft",-604);
				nextPage.show();
				nextPage.animate({ marginLeft: 0 }, 800,function(){
					currentPage.hide();
				});
				currentPage.animate({ marginLeft: 604 }, 800,function(){
					$('#smallimageslidebox .button').bind('click',handler1);
				});
			}
			else
			{

				if (current >= pages.length-1)
					current=0;
				else
					current=current+1;
				nextPage = pages.eq(current);	

				nextPage.css("marginLeft",604);
				nextPage.show();
				nextPage.animate({ marginLeft: 0 }, 800,function(){
				});
				currentPage.animate({ marginLeft: -604 }, 800,function(){
					currentPage.hide();
					$('#smallimageslidebox .button').bind('click',handler1);
				});
			}		
		}

		var handler2=function(){
			if (buttonClicked==0)
			{
			$('#smallimageslidebox .button').unbind('click');
			currentPage= pages.eq(current);
			if (current >= pages.length-1)
				current=0;
			else
				current=current+1;
			nextPage = pages.eq(current);	
			nextPage.css("marginLeft",604);
			nextPage.show();
			nextPage.animate({ marginLeft: 0 }, 800,function(){
			});
			currentPage.animate({ marginLeft: -604 }, 800,function(){
				currentPage.hide();
				$('#smallimageslidebox .button').bind('click',handler1);
			});
			timeoutID=setTimeout(function(){
				handler2();	
			}, 10000);
			}
		}

		$('#smallimageslidebox .button').click(function(){
			clearTimeout(timeoutID);
			handler1();
		});

		timeoutID=setTimeout(function(){
			handler2();	
			}, 10000);
		
});

</script>
</body>
</html>
