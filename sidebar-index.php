			<div class="sidebar col-md-4">
				
				<ul>
				<li>
				<h3>Buy to support our free services</h3>
				<?php 
				echo do_shortcode('[product id="5912"]'); 
				?>
				</li>

				<li>
				<?php 
				if(function_exists("show_recent_posts_georefer"))
				show_recent_posts_georefer(); ?>
				</li>

				<li>
				<?php 
				if(function_exists("show_lang_options"))
				show_lang_options(true); ?>
				</li>
				
				<li>
				<?php 
				if(function_exists("show_most_recent_task"))
				show_most_recent_task(); ?>
				</li>

				<?php #echo do_shortcode('[rpwe limit="100" tag="579" ]'); ?>
				<?php #echo do_shortcode('[rpwe limit="10" thumb="true" ]'); ?>

				<?php /*the_widget('Recent_Posts_Widget_Extended', array(
					"title" => "Recent Posts",
					"tag" => "english"))*/ ?>
				<?php #echo do_shortcode('[product id="5432"]'); ?>
				<?php #echo do_shortcode('[product id="5434"]'); ?>
				<?php #echo do_shortcode('[product id="5157"]'); ?>
				</ul>
			</div>
