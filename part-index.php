	<?php #_e("", "sis-foca-js"); ?>
	<center><?php if(function_exists("show_lang_options")) show_lang_options(false); ?></center>
	<br>
	<div class="row header-desc">
		<h1 class="forte"><?php _e("Work & Rest Time Tracker", "sis-foca-js"); ?></h1>
		<p style="font-weight: 600; font-size: 18px;"><?php _e("Relax and Focus: Online social time tracker for task and projects", "sis-foca-js"); ?>, 
		<br><?php _e("get you and your team more productive than ever", "sis-foca-js"); ?></p>
		<a class="btn btn-success" href="/register" style="font-weight: 600; padding: 10px 30px"><i class="glyphicon glyphicon-star"></i> <?php _e("Get started for Free", "sis-foca-js"); ?></a>
	</div>
	<!--div class="row">
		<div class="col-md-7">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/pomodoros-app.jpg" id="pomodoros-banner" alt="Pomodoros" class="img-responsive" style="width: 100%;">
		</div>
		<div class="col-md-5">
			<p>Work and rest</p>
			<p>with Pomodoro Technique timer</p> 
		</div>
	</div-->
	<center><h2 class="forte"><i class="glyphicon glyphicon-ok-circle"></i> <?php _e("Features", "sis-foca-js"); ?></h2></center>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/timer.jpg" id="pomodoros-banner" alt="Timer" class="img-responsive" style="width: 100%;">
				<div class="middle-left thumb-display thumb-display-black">
					<p><i class="glyphicon glyphicon-time"></i> <?php _e("Work & Rest", "sis-foca-js"); ?></p>
					<p class="hidden-xs"><?php _e("with Pomodoro Technique", "sis-foca-js"); ?></p> 
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/calendar.jpg" id="pomodoros-banner" alt="Calendar" class="img-responsive" style="width: 100%;">
				<div class="middle-right thumb-display thumb-display-black">
					<p><i class="glyphicon glyphicon-calendar"></i> <?php _e("Perfomance Calendar", "sis-foca-js"); ?></p>
					<p class="hidden-xs"><?php _e("shows tasks you done", "sis-foca-js"); ?></p> 
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/ranking.jpg" id="pomodoros-banner" alt="Ranking" class="img-responsive" style="width: 100%;">
				<div class="middle-left thumb-display thumb-display-black">
					<p><i class="glyphicon glyphicon-list"></i> <?php _e("Grow in Ranking", "sis-foca-js"); ?></p>
					<p class="hidden-xs"><?php _e("and get more productive", "sis-foca-js"); ?></p> 
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/tasks.jpg" id="pomodoros-banner" alt="Tasks" class="img-responsive" style="width: 100%;">
				<div class="middle-right thumb-display thumb-display-black">
					<p><i class="glyphicon glyphicon-tags"></i> <?php _e("Mind blown reports", "sis-foca-js"); ?></p>
					<p class="hidden-xs"><?php _e("to check time usage", "sis-foca-js"); ?></p> 
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/tickets.jpg" id="pomodoros-banner" alt="Support System" class="img-responsive" style="width: 100%;">
				<div class="middle-right thumb-display thumb-display-black">
					<p><i class="glyphicon glyphicon-question-sign"></i> <?php _e("Open a ticket", "sis-foca-js"); ?></p>
					<p class="hidden-xs"><?php _e("and get help", "sis-foca-js"); ?></p> 
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only"><?php _e("Previous", "sis-foca-js"); ?></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only"><?php _e("Next", "sis-foca-js"); ?></span>
		</a>
	</div>

	<?php
		$user_active_count = count_users(); //METHOD 1, only active
		#var_dump($user_active_count);
		$user_count = $wpdb->get_var("SELECT COUNT(`ID`) FROM $wpdb->users;");
		#$user_count = $wpdb->get_var("SELECT COUNT(*) FROM 2fnetwork_users;"); echo $user_count;
		revert_database_schema();
		$projectimer_tags = get_terms( array(
			'taxonomy' => 'post_tag',
			'hide_empty' => false,
		) );
		$count_posts = wp_count_posts( 'projectimer_focus' );
		$total_posts = $count_posts->publish+$count_posts->private;
		//
		$cities_count = get_meta_values( "post_location_city", "projectimer_focus" );
		//style="max-width: 400px;margin:0 auto;"
		?>
	<div class="row stats-com">
		<center><h2 class="forte"><i class="glyphicon glyphicon-signal"></i> <?php _e("Stats from Community", "sis-foca-js"); ?></h2></center>
		<ul class="list-group stats-group col-md-6">
			<li class="list-group-item active">
				<span class="badge"><?php echo /*$user_count." / ".*/$user_active_count["total_users"]; ?></span>
				<i class="glyphicon glyphicon-user" aria-hidden="true"></i> &nbsp; <?php _e("Active Users", "sis-foca-js"); ?>
			</li>
			<li class="list-group-item active">
				<span class="badge"><?php echo $total_posts; ?></span>
				<i class="glyphicon glyphicon-ok"></i> &nbsp; <?php _e("Pomodoros done", "sis-foca-js"); ?>
			</li>
			<li class="list-group-item active">
				<span class="badge"><?php echo round($total_posts/2); ?> h</span>
				<i class="glyphicon glyphicon-time"></i> &nbsp; <?php _e("Time tracked", "sis-foca-js"); ?>
			</li>
		</ul>
		<ul class="list-group stats-group col-md-6">
			<li class="list-group-item active">
				<span class="badge"><?php echo count($projectimer_tags); ?></span>
				<i class="glyphicon glyphicon-tags" aria-hidden="true"></i> &nbsp; <?php _e("Projects tags", "sis-foca-js"); ?>
			</li>
			<li class="list-group-item active">
				<span class="badge"><?php echo count($cities_count); ?></span>
				<i class="glyphicon glyphicon-globe"></i> &nbsp; <?php _e("Cities ranked", "sis-foca-js"); ?>
			</li>
			<li class="list-group-item active">
				<span class="badge">5</span>
				<i class="glyphicon glyphicon-text-background"></i> &nbsp; <?php _e("Translations", "sis-foca-js"); ?>
			</li>
		</ul>
		<script>
			jQuery(document).ready(function() {
				jQuery(".stats-group li").mouseover(function() {
					jQuery(this).removeClass( "active" );
				}).mouseout(function() {
					jQuery(this).addClass( "active " );
				});
			});
		</script>
	</div>
	<?php
	/*
	Vou ser o primeiro do ranking.
	A aprendizagem é um processo contínuo. Devemos estudar diariamente, analisar os resultados regularmente e aplicar métodos para melhorar os nossos resultados anteriores
	Com o Pomodoros.com.br consigo ter mais controle sobre meu tempo, ser mais produtivo e realizar melhor minhas tarefas

	Utilizava o Pomodoros.com.br há alguns anos, diariamente. Fiquei feliz de saber que o site voltou, espero que as pessoas voltem a usar, vou tentar pegar o hábito também porque "super" me ajudava
	*/
	?>
	<div class="row testimonials">
		<center><h2 class="forte"><i class="glyphicon glyphicon-bullhorn"></i> <?php _e("Testimonials", "sis-foca-js"); ?></h2></center>
		<div class="col-xs-6 col-sm-6 col-md-3 testimonials-container">
			<div class="thumbnail">
				<p><?php _e("I will be the first in the ranking", "sis-foca-js"); ?>.</p>
				<div class="caption">
					<?php  echo bp_activity_avatar( 'user_id=' . 1304 ); ?>
					<h3><?php  echo bp_core_get_userlink(  1304 ); ?></h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 testimonials-container">
			<div class="thumbnail">
				<p><?php _e("Learning is an ongoing process. We should study daily, analyze the results regularly and apply methods to improve our previous results", "sis-foca-js"); ?>.</p>
				<div class="caption">
					<?php  echo bp_activity_avatar( 'user_id=' . 828 ); ?>
					<h3><?php  echo bp_core_get_userlink(  828 ); ?></h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 testimonials-container">
			<div class="thumbnail">
				<p><?php _e("With Pomodoros.com.br I can have more control over my time, be more productive and perform my tasks better", "sis-foca-js"); ?>.</p>
				<div class="caption">
					<?php  echo bp_activity_avatar( 'user_id=' . 2 ); ?>
					<h3><?php  echo bp_core_get_userlink(  2 ); ?></h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-6 col-md-3 testimonials-container">
			<div class="thumbnail">
				<p><?php _e("I used Pomodoros.com.br a few years ago, every day. I was happy to know that the website came back, I hope people use it again, I'll try to get into the habit too because 'super' helped me", "sis-foca-js"); ?>! </p>
				<div class="caption">
					<?php  echo bp_activity_avatar( 'user_id=' . 974 ); ?>
					<h3><?php  echo bp_core_get_userlink(  974 ); ?></h3>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row brief-history">
		<h2 class="forte"><i class="glyphicon glyphicon-road"></i> <?php _e("Brief History", "sis-foca-js"); ?></h2>
		<span>...
		<a tabindex="0" class="btn btn-lg btn-default" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Initial Plans", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-offline.jpg'><?php _e("Francisco, CEO and founder, tried a lot of pomodoros softwares and decided to build it's own", "sis-foca-js"); ?>">2010</a>
		...
		<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="Pomodoros Red" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-red.jpg'><?php _e("First version, already online, social and async JavaScript timer, based in WordPress and BuddyPress", "sis-foca-js"); ?>">2011</a>
		...
		<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("First Growth", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-red.jpg'><?php _e("Very promissor period, users growth based in spontaneous reviews, in blogs, no single penny expensed in marketing", "sis-foca-js"); ?>">2012</a>
		...
		<a tabindex="0" class="btn btn-lg btn-success" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="Pomodoros Green" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-green.jpg'><?php _e("A lot of updates to join in a brazilian startup contest, no investors became interested", "sis-foca-js"); ?>">2013</a>
		...
		<a tabindex="0" class="btn btn-lg btn-success" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Second Growth", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-green.jpg'><?php _e("Another promissor period, mouth-to-mouth and organic growth, but founder needed to stop developing system due Master course and it started became out of date", "sis-foca-js"); ?>" >2014</a>
		...
		<a tabindex="0" class="btn btn-lg btn-success" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Turbulency", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-green.jpg'><?php _e("High maintenance costs, founder have no time for coding, service was still online, with growth in users, but the server was poor configured and unable to update regularly", "sis-foca-js"); ?>">2015</a>
		...
		<a tabindex="0" class="btn btn-lg btn-warning" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Pomodoros Offline", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-offline.jpg'><?php _e("Service went offline because founder needed to work in other activities and trying to finish Master course, lost all regular users", "sis-foca-js"); ?>">2016</a>
		...
		<a tabindex="0" class="btn btn-lg btn-warning" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Laboratory", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-offline.jpg'><?php _e("Founder quited Master course and start full-time operations. New server configuration, focused on scalability and shared users information, lot of tools created to speedup development and maintance, a base for future growth. The most important year, a lot of experiences was made, since there was no users, the service constantly ended up broken untill it get on track again", "sis-foca-js"); ?>">2017</a>
		...
		<a tabindex="0" class="btn btn-lg btn-black" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="Pomodoros Black" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-black.jpg'><?php _e("After years offline, finally Pomodoros.com.br are back online in a new 'mobile first' version, with app for Android in Google Play Store", "sis-foca-js"); ?>">2018</a>
		...
		<a tabindex="0" class="btn btn-lg btn-black" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Pomodoros Global", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-black.jpg'><?php _e("We expect that all translations are 100% ready and people all over the world join the community, first paid ads and gifts sellings in its own built-in donation store", "sis-foca-js"); ?>">2019</a>
		...
		<a tabindex="0" class="btn btn-lg btn-black" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Clear Real Valuation", "sis-foca-js"); ?>" data-content="<img src='<?php bloginfo('stylesheet_directory');?>/images/pomo-versions/pomodoros-black.jpg'><?php _e("For good or for worst, the valuation of the system are clear, investors can join or leave for a just price in options", "sis-foca-js"); ?>">2020</a>
		...
		<a tabindex="0" class="btn btn-lg btn-default" role="button" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="top" title="<?php _e("Societal Plan", "sis-foca-js"); ?>" data-content="<?php _e("Plans for multiple single investors to joining, options are become more valuable, at this time is expected that founder have about 15% of stock", "sis-foca-js"); ?>">2021</a>
		...
		</span>
	</div>
	<!--div style="text-align: center;" >
		<h2 class="forte"><i class="glyphicon glyphicon-education"></i> Focus Training</h2>
		<p style="font-weight: 600; font-size: 18px;">Get the most of the most valuable resource you have
		<br> YOUR TIME
		<br> contact us to get an special training for boot focus and productivity</p>
		<a class="btn btn-success" href="/register" style="font-weight: 600; padding: 10px 30px"><i class="glyphicon glyphicon-education"></i> Contact Teacher</a>
	</div-->
	<center><h2 class="forte"><i class="glyphicon glyphicon-comment"></i> Blog</h2></center>
	<div class="row blog-posts">
				<?php 
				if(function_exists('set_shared_database_schema')) {
				    set_shared_database_schema();
				}
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				global $user_prefered_language;
				$user_prefered_language_prefix = substr($user_prefered_language, 0,2);
				$args = array(
					"posts_per_page" => 3,
					"post_type" => "post",
					'tag' => "lang-".$user_prefered_language_prefix,
				);
				#var_dump("lang-".$user_prefered_language_prefix);die;
				$wp_query = new WP_Query( $args );
				#var_dump($wp_query);die;
				if ( have_posts() ) : ?>

					<?php while (have_posts()) : the_post(); ?>
						<?php #if(has_tag("english")){ ?>
						<?php do_action( 'bp_before_blog_post' ) ?>

						<div class="post col-md-4" id="post-<?php the_ID(); ?>">

								<div class="contem-thumb">
								<center>
							    <a style="margin:0 auto;" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							       <?php 

							       if ( has_post_thumbnail() ) {
							       		
										the_post_thumbnail( array(500,200) );
									}

							       ?>
							    </a>
							    </center>
							    </div>
							<?php #endif;  ?>
							<div class="author-box">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), '60' ); ?>
							</div>

							<div class="post-content">
								<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

								<p class="date"><?php the_time("Y-m-d") ?></p>

								<div class="entry">
									<?php 
									if(!is_single())
									the_excerpt();
									else
									the_content( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
								</div>

								<p class="postmetadata"><span class="tags"><?php #the_tags( __( 'Tags: ', 'buddypress' ), ', ', '<br />'); ?></span> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
							</div>

						</div>

						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php #} ?>
					<?php endwhile; ?>
					<?php #the_posts_pagination(); ?>
					<?php 
					#plugin: f5sites-shared-posts-tables-and-uploads-folder
					#if(function_exists("print_blog_nav_links") && !is_home()) print_blog_nav_links($post, "lang-".$user_prefered_language_prefix); ?>

				<?php else : ?>

					<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
					<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ) ?></p>

					<?php locate_template( array( 'searchform.php' ), true ) ?>

				<?php endif; ?>
	</div>
	<br>
	<center><?php if(function_exists("show_lang_options")) show_lang_options(false); ?></center>
		
	<?php if(function_exists("show_welcome_message")) show_welcome_message(true); ?>
	<?php /*
	<div style="padding: 0 5%;">
		<div class="container-thumb">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/timer.jpg" id="pomodoros-banner" alt="Timer" class="img-responsive" style="width: 100%;">
			<div class="middle-right thumb-display thumb-display-blue">
				<p>Work and rest</p>
				<p>with Pomodoro Technique timer</p> 
			</div>
		</div>
		<br>
		<div class="container-thumb">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/calendar.jpg" id="pomodoros-banner" alt="Calendar" class="img-responsive" style="width: 100%;">
			<div class="middle-left thumb-display thumb-display-blue">
				<p>Calendar shows</p>
				<p>what you have done</p> 
			</div>
		</div>
		<br>
		<div class="container-thumb">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/tasks.jpg" id="pomodoros-banner" alt="Calendar" class="img-responsive" style="width: 100%;">
			<div class="middle-left thumb-display thumb-display-blue">
				<p>Calendar shows</p>
				<p>what you have done</p> 
			</div>
		</div>
		<br>
		<div class="container-thumb">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/ranking.jpg" id="pomodoros-banner" alt="Calendar" class="img-responsive" style="width: 100%;">
			<div class="middle-left thumb-display thumb-display-blue">
				<p>Calendar shows</p>
				<p>what you have done</p> 
			</div>
		</div>
		<br>
		<div class="container-thumb">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banners/tickets.jpg" id="pomodoros-banner" alt="Calendar" class="img-responsive" style="width: 100%;">
			<div class="middle-left thumb-display thumb-display-blue">
				<p>Calendar shows</p>
				<p>what you have done</p> 
			</div>
		</div>
		+ Treinamento em Foco
	</div>
	<?php 
	#echo do_shortcode('[rev_slider alias="pomo1"]'); 

	/*<img src="<?php bloginfo('
	stylesheet_directory'); ?>/images/banners/pomodoros-app.jpg" id="pomodoros-banner" alt="Pomodoros" class="img-responsive" style="width: 100%;">*/
	?>
	
	
	

	<?php
	/*
	global $user_prefered_language;
	#force_database_aditional_tables_share(false);
	#echo do_shortcode('[product id="5160"]');  
	#echo do_shortcode('[products ids="4530,5160" ]');
	#echo do_shortcode('[products]');
	#echo do_shortcode('[products ids="5160,4530" columns="4"]');
	#
	#echo do_shortcode('[product_category limit="4" columns="4" orderby="popularity" product_cat="www.pomodoros.com.br"]');  
	#revert_database_schema();#4530#5160
	?>
	<br>
	
	<div id="content" class="content_default col col-xs-12 ">
		<div class="row">
			
			<div class="padder col-md-8">
			
			<!--hr /-->
				
			<?php do_action( 'bp_before_blog_home' ) ?>

			<div class="page" id="blog-latest">

				<?php 
				if(function_exists('set_shared_database_schema')) {
				    set_shared_database_schema();
				}
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				#reset_wp_query();
				#wp_reset_query();
				#$wp_query-> set('tag' ,'lang-fr');
				$user_prefered_language_prefix = substr($user_prefered_language, 0,2);
				$args = array(
					"posts_per_page" => 3,
					"post_type" => "post",
					'tag' => "lang-".$user_prefered_language_prefix,
				);
				#var_dump("lang-".$user_prefered_language_prefix);die;
				$wp_query = new WP_Query( $args );
				#var_dump($wp_query);die;
				if ( have_posts() ) : ?>

					<?php while (have_posts()) : the_post(); ?>
						<?php #if(has_tag("english")){ ?>
						<?php do_action( 'bp_before_blog_post' ) ?>

						<div class="post" id="post-<?php the_ID(); ?>">

								<div class="contem-thumb">
								<center>
							    <a style="margin:0 auto;" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							       <?php 

							       if ( has_post_thumbnail() ) {
							       		
										the_post_thumbnail( array(500,200) );
									}

							       ?>
							    </a>
							    </center>
							    </div>
							<?php #endif;  ?>
							<div class="author-box">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), '60' ); ?>
							</div>

							<div class="post-content">
								<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

								<p class="date"><?php the_time("Y-m-d") ?></p>

								<div class="entry">
									<?php 
									if(!is_single())
									the_excerpt();
									else
									the_content( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
								</div>

								<p class="postmetadata"><span class="tags"><?php the_tags( __( 'Tags: ', 'buddypress' ), ', ', '<br />'); ?></span> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
							</div>

						</div>

						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php #} ?>
					<?php endwhile; ?>
					<?php the_posts_pagination(); ?>
					<?php 
					#plugin: f5sites-shared-posts-tables-and-uploads-folder
					if(function_exists("print_blog_nav_links") && !is_home()) print_blog_nav_links($post, "lang-".$user_prefered_language_prefix); ?>

				<?php else : ?>

					<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
					<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ) ?></p>

					<?php locate_template( array( 'searchform.php' ), true ) ?>

				<?php endif; ?>
			</div>

			<?php do_action( 'bp_after_blog_home' ); ?>

		</div><!-- .padder -->

			<?php locate_template( array( 'sidebar-index.php' ), true ); ?>
		</div>
	</div><!-- #content -->
	*/