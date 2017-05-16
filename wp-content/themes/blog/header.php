<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Fashion is our passion | Free responsive Fashion Blog template
      </title>
      <meta name="description" content="Download free amazing responsive Fashion Blog template."/>
      <meta name="keywords" content="free, responsive, blog, fashion, web site, template"/>
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')  ?> " >
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="<?php echo  get_template_directory_uri() ?>/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="<?php echo  get_template_directory_uri() ?>/js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="<?php echo  get_template_directory_uri() ?>/js/modernizr.js"></script>
      <script type="text/javascript" src="<?php echo  get_template_directory_uri() ?>/js/responsee.js"></script>          
      <!--[if lt IE 9]> 
      <script src="<?php echo  get_template_directory_uri() ?>/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <![endif]-->    
       <?php wp_head(); ?> 
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.html">            
                  Fashion<span>Blog</span>
                  </a>            
                  <h1>free fashion blog template</h1>
                  <!-- MENU -->
                  <biv class="top-ul right">
                  <?php
                   if (has_nav_menu('header')) :
                   wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'container_id' => 'top-ul',
                   ));
                   else:
                  ?>





                  <ul>
                     <li>            
                        <a href="index.html">Blog</a>            
                     </li>
                     <li>            
                        <a href="about.html">About</a>            
                     </li>
                     <li>            
                        <a href="archive.html">Archive</a>            
                     </li>
                     <li>            
                        <a href="contact.html">Contact</a>            
                     </li>
                     <div class="social right">            
                        <a target="_blank" href="https://www.facebook.com/myresponsee">
                        <i class="icon-facebook_circle icon2x"></i>
                        </a>          
                        <a target="_blank" href="https://twitter.com/MyResponsee">
                        <i class="icon-twitter_circle icon2x"></i>
                        </a>          
                     </div>
                  </ul>
                  <?php endif; ?> 
                  <div class="social">            
                        <a target="_blank" href="https://www.facebook.com/myresponsee">
                        <i class="icon-facebook_circle icon2x"></i>
                        </a>          
                        <a target="_blank" href="https://twitter.com/MyResponsee">
                        <i class="icon-twitter_circle icon2x"></i>
                        </a>          
                     </div>
                  </div>
                  <!-- MENU -->
               </div>
            </nav>
         </div>
         <?php wp_head()?>
      </header>