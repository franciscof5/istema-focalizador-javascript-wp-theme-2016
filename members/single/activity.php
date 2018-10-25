<?php

/**
 * BuddyPress - Users Activity
 *
 * @package BuddyPress
 * @subpackage bp-default
 */

?>

<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
	<ul>

		<?php bp_get_options_nav(); ?>

		<li id="activity-filter-select" class="last">
			<label for="activity-filter-by"><?php _e( 'Show:', 'buddypress' ); ?></label>
			<select id="activity-filter-by">
				<option value="-1"><?php _e( 'Everything', 'buddypress' ); ?></option>
				<option value="activity_update"><?php _e( 'Updates', 'buddypress' ); ?></option>

				<?php
				if ( !bp_is_current_action( 'groups' ) ) :
					if ( bp_is_active( 'blogs' ) ) : ?>

						<option value="new_blog_post"><?php _e( 'Posts', 'buddypress' ); ?></option>
						<option value="new_blog_comment"><?php _e( 'Comments', 'buddypress' ); ?></option>

					<?php
					endif;

					if ( bp_is_active( 'friends' ) ) : ?>

						<option value="friendship_accepted,friendship_created"><?php _e( 'Friendships', 'buddypress' ); ?></option>

					<?php endif;

				endif;

				if ( bp_is_active( 'forums' ) ) : ?>

					<option value="new_forum_topic"><?php _e( 'Forum Topics', 'buddypress' ); ?></option>
					<option value="new_forum_post"><?php _e( 'Forum Replies', 'buddypress' ); ?></option>

				<?php endif;

				if ( bp_is_active( 'groups' ) ) : ?>

					<option value="created_group"><?php _e( 'New Groups', 'buddypress' ); ?></option>
					<option value="joined_group"><?php _e( 'Group Memberships', 'buddypress' ); ?></option>

				<?php endif;

				do_action( 'bp_member_activity_filter_options' ); ?>

			</select>
		</li>
	</ul>
</div><!-- .item-list-tabs -->
<div>
				<h3>Projetos <?php //echo count($all_tags); ?></h3>
				<?php
				//all_posts = $wpdb->query('SELECT * FROM `wp_posts` WHERE `post_author` = '.$user_id.' GROUP BY DATE (`post_date`)');
				//$all_posts = query_posts('author=1');
				//$all_posts = $wpdb->query('SELECT `ID` FROM `wp_posts` WHERE `post_author` = '.$user_id.'');
				//get_author_post_tags_wpa78489(bp_displayed_user_id());
				get_projectimer_project_tags(bp_displayed_user_id());
				#global $wpdb;
				#$all_posts = $wpdb->get_results('SELECT `ID` FROM `pomodoros_posts` WHERE `post_author` = '.bp_displayed_user_id().'');
				//var_dump($wpdb);die;

				/*$all_tags = array();
				foreach ($all_posts as $value) {
					//var_dump($value->ID)." [ ] ";
					$tags = wp_get_post_tags($value->ID);
					$term_slug = $tags[0]->slug;
					//var_dump(!in_array($term_slug, $all_tags));
					if(!in_array($term_slug, $all_tags)) {
						$all_tags[]=$term_slug;
					}
					//var_dump($tags[0]->slug);
					/*
					slug
					name
					
					foreach ($tags as $value) {
						echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>{$tag->name}</a>";
					}
				}*/ ?>
				
				
				
				<?php /*foreach ($all_tags as $slug) {
					echo "<a href=".get_bloginfo("url")."/projeto/$slug>{$slug}</a>, ";
				}*/ ?>
				
				
				<?php
				//var_dump($all_tags);
				//die;

				/*$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );
							
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';*/
				?>
			</div>
			<div>
				<h3>Desempenho e Velocidade</h3>
				<?php
				//$usuario_alvo = bp_displayed_user_id();
				//$GLOBALS["alvo"] = $usuario_alvo;
				get_template_part("part", "gauges"); 
				?>
			</div>
<?php do_action( 'bp_before_member_activity_post_form' ); ?>

<?php
if ( is_user_logged_in() && bp_is_my_profile() && ( !bp_current_action() || bp_is_current_action( 'just-me' ) ) )
	locate_template( array( 'activity/post-form.php'), true );

do_action( 'bp_after_member_activity_post_form' );
do_action( 'bp_before_member_activity_content' ); ?>

<div class="activity" role="main">

	<?php locate_template( array( 'activity/activity-loop.php' ), true ); ?>

</div><!-- .activity -->

<?php do_action( 'bp_after_member_activity_content' ); ?>
