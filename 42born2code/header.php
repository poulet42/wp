<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />

	<!--[if lte IE 6]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/supersleight-min.js"></script><![endif]-->
<?php wp_enqueue_script(get_bloginfo('template_directory').'/js/jquery.js'); ?>
<?php wp_enqueue_script('superfish', get_bloginfo('template_directory').'/js/superfish.js', array('jquery'), '1.7'); ?>
<?php wp_enqueue_script(get_bloginfo('template_directory').'/js/nav.js'); ?>
<?php if (trim(get_option('ft_header_code')) <> "") { echo stripslashes(get_option('ft_header_code')); } ?>
<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

<?php wp_head(); ?> <!-- #NE PAS SUPPRIMER cf. codex wp_head() -->
</head>
<body <?php body_class() ?>>
<header <?php echo (is_home() ? ' style="position:absolute;" >' : ' style="background-color:#ff0000;" >' ); ?>
	<a href="<?php echo get_option('home'); ?>">
		<img id="site-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
	</a>
	<?php
		if(!is_home())
		{
			include('searchform.php');
			?>
			<nav id="menu">
				<a href="#">VOIR LE MENU</a>
				<ul id="toggle_menu">
					<li><a href="#">TEST #1</a></li>
					<li><a href="#">TEST #2</a></li>
					<li><a href="#">TEST #3</a></li>
				</ul>
			</nav>
			<?php
		}
	?>
	<ul id="right-header-nav">
				<?php
					if(is_user_logged_in())
					{
						echo '<li><a href="' . wp_logout_url() . '">se déconnecter</a></li>';
					}
					else
					{
						echo '<li><a href="' . wp_login_url() . '">se connecter</a></li>';
						echo '<li><a href="' . wp_registration_url() . '">s\'enregistrer</a></li>';
					}
				?>
				<li><a href="#" id="publish_btn" class="btn">publiez votre annonce</a></li>
	</ul>
</header>
<div id="container">
