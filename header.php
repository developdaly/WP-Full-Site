<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head profile="http://gmpg.org/xfn/11">
    	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <title><?php the_title(); ?></title>
		
        <link rel="alternate" type="application/rss+xml" title="Develop Daly RSS Feed" href="http://developdaly.com/feed/" />
        <link rel="alternate" type="application/atom+xml" title="Develop Daly Atom Feed" href="http://developdaly.com/feed/atom/" />
        <link rel="pingback" href="http://developdaly.com/xmlrpc.php" />
        <link rel="shortcut icon" href="http://developdaly.com/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/grids/grids-min.css" />
        <link rel="stylesheet" type="text/css" href="http://developdaly.com/wp-content/themes/wpfullsite/style.css" media="screen" />
        
		<!--[if IE 7]>
            <link rel="stylesheet" href="http://developdaly.com/wp-content/themes/wpfullsite/ie.css" type="text/css" media="screen, projection" />
        <![endif]-->
        
		<?php wp_head(); ?>
				
    </head>
    <body id="<?php echo $post->post_name; ?>" class="<?php if (is_home()){ echo 'blog'; } ?>">
        <div id="doc2" class="<?php if (is_home()){ echo 'yui-t6'; } else { echo 'yui-t3'; } ?>">
            <div id="hd">
                <?php if (is_front_page()){ ?>
					<h1 id="logo"><a href="http://developdaly.com/">Develop Daly</a></h1>
				<?php } else { ?>
					<div id="logo"><a href="http://developdaly.com/">Develop Daly</a></div>
				<?php } ?>
				<?php wp_page_menu('title_li=&menu_class=nav&sort_column=menu_order&include=348,8,109,350,354,9'); ?> 
            </div>
            <div id="bd">