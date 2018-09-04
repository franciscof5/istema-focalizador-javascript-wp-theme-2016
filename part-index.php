	<?php echo do_shortcode('[rev_slider alias="pomo1"]'); ?>
	
	<?php show_welcome_message(); ?>
	<?php
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
	<?php #show_lang_options(false); ?>
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
									the_excerpt("... keep reading.");
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
