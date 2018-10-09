<?php global $user_prefered_language; ?>
<!DOCTYPE html>
	<head lang="<?php echo $user_prefered_language; ?>">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<?php
		/*global $user_prefered_language;
		if($user_prefered_language=="pt_BR" || $user_prefered_language=="pt")
			$apendix = "Brasil";
		else
			$apendix = "Global";*/
		global $title_apendix;
		?>
		<title>Pomodoros <?php echo $title_apendix;wp_title(); 
		#bp_page_title() ?></title>
		
		<?php do_action( 'bp_head' ) ?>
		
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		
		<!--link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" /-->

		<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
		<?php endif; ?>
		
		<?php if ( function_exists( 'bp_member_activity_feed_link' ) && bp_is_user() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_displayed_user_fullname() ?> | <?php _e( 'Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_member_activity_feed_link() ?>" />
		<?php endif; ?>
		
		<?php if ( function_exists( 'bp_group_activity_feed_link' ) && bp_is_group() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_current_group_name() ?> | <?php _e( 'Group Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_group_activity_feed_link() ?>" />
		<?php endif; ?>
		
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<!--link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet'-->
		<?php wp_head(); ?>

		<meta name="viewport" content="width=device-width, user-scalable=no">
	</head>


<body <?php #body_class()  id="bp-default22" ?>>

<!--div id="audio"></div-->

<?php do_action( 'bp_before_header' ) ?>
<span id='linha-fundo'></span>
<div id="contem-tudo" class="container-fluid content">
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<div class="navbar-header" style="margin-top: 5px">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pomoNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!--div class="contem-icone ">
					<a class="" title="Blog do Pomodoros" href="<?php bloginfo('url'); ?>">
						<span class="icone-legenda hidden-lg">Blog</span>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pomodoro-logo-topo.png" id="pomodoros-topo">
					</a>
		      	</div-->

				<a class="" title="<?php _e("Go to Pomodoros Blog", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pomodoro-logo-topo.png" id="pomodoros-topo">
				</a>
			</div>

			<ul class="collapse navbar-collapse" style="margin-top: 5px"  id="pomoNavbar">
			      <?php if ( is_user_logged_in() ) { ?> 
			      <li>
			      	<div class="contem-icone ">
			      		<a title="<?php _e("Start Focus", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>/focus/">
			      			<div href="" id="icone-foc"><span class="icone-legenda hidden-lg"><?php _e("Focus", "sis-foca-js"); ?></span></div>
			      		<span class="hidden-sm hidden-md"><?php _e("Focus", "sis-foca-js"); ?></span>
			      		</a>
			      	</div>
			       </li>
			       <li>
			       	<div class="contem-icone ">
			       		<a title="<?php _e("View Productivity", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>/members/<?php  $current_user = wp_get_current_user(); echo $current_user->user_login  ?>">
			       			<div href="" id="icone-gauge">
			       				<span class="icone-legenda hidden-lg"><?php _e("Productivity Factor", "sis-foca-js"); ?></span>
			       			</div>
			       			<span class="hidden-sm hidden-md"><?php _e("Productivity", "sis-foca-js"); ?></span>
			       		</a>
			       	</div>
			       </li>
			      <li>
			      	<div class="contem-icone ">
				      	<a title="<?php _e("Colleagues list", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>/members/" alt="Amigos">
				      		<div href="" id="icone-amigo">
				      			<span class="icone-legenda hidden-lg"><?php _e("Colleagues", "sis-foca-js"); ?></span>
				      		</div>
				      		<span class="hidden-sm hidden-md"><?php _e("Colleagues", "sis-foca-js"); ?></span>
				      	</a>
				    </div>
			      </li>

			      <li>
			      	<div class="contem-icone">
			      	<a title="<?php _e("View the most productive users Ranking", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>/ranking/">
			      		<div href="" id="icone-rank">
			      			<span class="icone-legenda hidden-lg"><?php _e("Ranking", "sis-foca-js"); ?></span>
			      		</div>
			      		<span class="hidden-sm hidden-md"><?php _e("Ranking", "sis-foca-js"); ?></span>
			      	</a>
			      	</div>
				  </li>

			      <li>
			      	<div class="contem-icone">
			      	<a title="<?php _e("Perfomance Calendar", "sis-foca-js"); ?>" href="<?php bloginfo('url'); ?>/calendar/">
			      		<div href="" id="icone-calend">
			      			<span class="icone-legenda hidden-lg"><?php _e("Calendar", "sis-foca-js"); ?></span>
			      		</div>
			      		<span class="hidden-sm hidden-md"><?php _e("Calendar", "sis-foca-js"); ?></span>
			      	</a>
			      	</div>
			      </li>
			     <?php } ?>
			    <ul class="nav navbar-nav navbar-right">
			      <?php if ( !is_user_logged_in() ) { ?> 
			      <li>
			      	<a title="<?php _e("Login", "sis-foca-js"); ?>" class="btn btn-link abrir_login" id="login_login" tabindex="1" style="padding-top: 10px;" /><?php _e("Login", "sis-foca-js"); ?></a>
			      </li>
			      <li>
			      	<a href="/register" class="btn btn-link" role="button" aria-pressed="true" title="<?php _e("Create your free pomodoros.com.br account", "sis-foca-js"); ?>" style="padding-top: 10px;" ><?php _e("Register", "sis-foca-js"); ?></a>
			      </li>
			      <?php } else { ?> 
			      <!--li>
			      	<a title="Ver Blog" class="btn btn-link" href="/blog" style="padding-top: 10px;">Blog</a>
			      	</li-->
			      <!--li>
			      	<button title="Settings" id="settingsbutton" class="btn btn-link" href="/blog" style="padding-top: 10px;"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button>
			      </li-->
			      <li>
			      		<a title="<?php _e("View your account", "sis-foca-js"); ?>" id="settingsbutton" class="btn btn-link" href="<?php bloginfo('url'); ?>/my-account" style="padding-top: 10px;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="hidden-sm hidden-md"><?php _e("My Acount", "sis-foca-js"); ?></span></a>
			      </li>
			      <li>
			      		<a title="<?php _e("Open support ticket", "sis-foca-js"); ?>" id="settingsbutton" class="btn btn-link" href="<?php bloginfo('url'); ?>/help" style="padding-top: 10px;"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <span class="hidden-sm hidden-md"><?php _e("Support", "sis-foca-js"); ?></span></a>
			      </li>
			      <li>
			      	<a title="<?php _e("Logout", "sis-foca-js"); ?>" class="btn btn-link" href="<?php echo wp_logout_url(); ?>" style="padding-top: 10px;"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> <span class="hidden-sm hidden-md"><?php _e("Logout", "sis-foca-js"); ?></span></a>
			      </li>
			      <?php } ?>
			    </ul>
			</ul>
		</div>
	</nav>
	<?php /**/ ?>

	<div id="loginlogbox">
		<?php wp_login_form(); ?>
		<div style="margin-top:-10px;">
			<?php do_action( 'wordpress_social_login' ); ?> 
			<div style="margin-top: -40px;">
				<?php do_action( 'bp_after_sidebar_login_form' ); ?>
			</div>
		</div>
	</div>
	<?php 
	#var_dump(get_locale());
	#_e('Hello test', 'sis-foca-js'); ?>
	<?php do_action( 'bp_header' ) ?>


	<?php do_action( 'bp_after_header' ) ?>
	<?php do_action( 'bp_before_container' ) ?>



	<div class="row">