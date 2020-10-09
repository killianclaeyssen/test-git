<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
		<title> Les petits crayons du karma </title>
		<?php wp_head();?>
		<title>
		 <?php bloginfo('name');?> - <?php bloginfo('description');?>
		</title>
		<aside>
			<?php get_sidebar();?>
		</aside>


		<nav id="menuprincipal">
			<?php wp_page_menu('show_home=1');?>
		</nav>
	</head>
</html>
