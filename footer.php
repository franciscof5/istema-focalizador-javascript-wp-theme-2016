			
			</div>
		</div> <!-- #wrapper #2D2D2D-->
		<br style="clear:both;" />
		&nbsp;
		<br />
		<?php do_action( 'bp_after_container' ) ?>

		<?php do_action( 'bp_before_footer' ) ?>

		<div id="footer" class="container-fluid">
			<div id="footer-content" class="row">
				<div class="col-sm-3 contem_last_pomodoros">
					<?php show_recent_pomodoros(); ?>
				</div>

				<div class="col-sm-3">
					<h3>Top 7 Users</h3>
					<?php
					$instance = array(
						"title" => "",
						"count" => "7",
						"exclude_roles" => array("administrator"),#
						"include_post_types" => array("projectimer_focus"),
						"preset" => "custom",
						#"template" => "%gravatar_32% %firstname% %lastname% (%nrofposts%)",
						"template" => '<li><a href="/colegas/%username%">%gravatar_18%  %firstname% %lastname% (%nrofposts%) </a>  </li>',
						"before_list" => "<ul class='ul-ranking-footer ta-gravatar-list-count'>",
						"after_list" => "</ul>",
						"custom_id" => "",
						"archive_specific" => false); 
					the_widget("Top_Authors_Widget", $instance, "");
					?>
					<!--small><script>document.write(txt_foot_naoc)</script></small-->
					<?php
					$array_top_cities = get_meta_values( "post_location_city", "projectimer_focus" );
					#$array_top_cities = get_meta_values( "post_location_city", "projectimer_focus" );
					$array_top_countries = get_meta_values( "post_location_country", "projectimer_focus" );
					?>
					<h3>Top 3 Cities</h3>
					<?php array_to_rank($array_top_cities, 3); ?>
					<h3>Top 3 Countries</h3>
					<?php array_to_rank($array_top_countries, 3); ?>
					
				</div>

				<div class="col-sm-3">
					<?php show_recent_posts_georefer(); ?>
				</div>

				<div id="footer-contact-form" class="col-sm-3">
					<h3><script>document.write(txt_foot_fale)</script></h3>
					<?php if(!is_user_logged_in()) { ?>
						<p class="bg-danger"><script>document.write(txt_foot_logi)</script></p>
					<?php } else { ?>
						
						<?php 
						global $locale;
						if($locale=="pt_BR" || $locale=="pt")
							echo do_shortcode( '[contact-form-7 id="1526" title="Contato"]' ); 
						else 
							echo do_shortcode( '[contact-form-7 id="3950" title="Contato"]' ); 
						?>
					<?php } ?>
				</div>
		
				
			</div>
			
			<div class="row">
				<div class="col-sm-12" style="text-align: right;">
					<?php show_lang_options(false); ?>
				</div>
			</div>

			<?php
			#<div  class="row white-link">
			#force_database_aditional_tables_share();
			#echo do_shortcode('[product id="4530"]');  
			#revert_database_schema();
			#</div>
			?>
				
				
			<div  class="row white-link">
				<div class="col-sm-6">
					<p>Developed by <a href="https://www.franciscomat.com">Francisco Mat</a>
					<?php /*, Fork us <a href="https://github.com/franciscof5/sistema-focalizador-javascript">on GitHub</a> */ ?>
					</p>
				</div>
				<?php
				/*<br /> Hosted by <a href="https://www.f5sites.com/pomodoros">F5 Sites</a>*/
				?>
				<div class="col-sm-6">
					<p style="text-align: right;">Watch <a href="<?php bloginfo('url'); ?>/projeto/pomodoros-2"> Pomodoros project</a> in real time</p>
				</div>
			</div>
			<?php do_action( 'bp_footer' ) ?>
		</div><!-- #footer -->
<script type="text/javascript">

jQuery( document ).ready(function() {
	largura = 800;
	//primeiro = jQuery("li:nth-child(2)").find('span').text();
	var regExpGetValueInParentisi = /\(([^)]+)\)/;
	
	//alert(primeiro);
	//jQuery( ".top-authors-widget").find( "li" ).each(function(i) {
	
	if(jQuery( ".ta-preset li").length) {
		primeiro = jQuery(".ta-preset li:nth-child(1)").text();
	//var matches = parseInt(regExpGetValueInParentisi.exec());
	var matches = regExpGetValueInParentisi.exec(primeiro);
	var primeiro = parseInt(matches[1]);
		jQuery( ".ta-preset li").each(function(i, b) {
			//alert(b);
			//jQuery( "li" ).each(function(i) {
			/*alert( jQuery(this).find('span').text() );
			jQuery( this ).width( jQuery(this).find('span').text() );/
			*/
			//alert(i);

			jQuery(this).prepend("<span class=pos>"+(i+1)+"</span>");
			qtddpomo_parentisis = (jQuery(this).text());
			//alert(qtddpomo_parentisis);
			//var patt = /\((\d)\)/;
			
			//var qtddpomo = qtddpomo_parentisis.match(patt)[0].replace("(", "").replace(")","");
			
			
			
			var matches = regExpGetValueInParentisi.exec(qtddpomo_parentisis);

			//matches[1] contains the value between the parentheses
			//console.log(matches[1]);

			qtddpomo= parseInt(matches[1]);
			//res = 25 + ((((qtddpomo/primeiro)/4)*3)*100);
			//res = 50 + ((((qtddpomo/primeiro)/2)*1)*100);
			
			res = 80 + ((((qtddpomo/primeiro)/10)*2)*100);
			//alert(res);
			jQuery( this ).width( (res) + "%" );
			//jQuery( this ).css('backgroundColor', "CCC");
			


			/*if(i>0) {
				jQuery( this ).before( '<span style="float: left;font-family: Lilita One, cursive;width: 30px;font-size: 20px;line-height: 30px;text-align: center;background: #009933;color: #FFF;border-radius: 50px;padding: 0;margin: 20px 10px;">'+i+"</span" );
			}*/
		});
		jQuery(".ta-preset li:nth-child(1)").css({
				"background":"#FFF379",
				"color": "#9B7529",
		});
		jQuery(".ta-preset li:nth-child(1) .pos").css({
			"color": "#9B7529",
			"font-size": "30px"
		});
		jQuery(".ta-preset li:nth-child(1) a").css("color", "#9B7529");


		jQuery(".ta-preset li:nth-child(2)").css({
				"background":"#98969B",
				"color": "#D0D8D7"
		});
		jQuery(".ta-preset li:nth-child(2) .pos").css({
			"color": "#D0D8D7",
			"font-size": "26px"
		});
		jQuery(".ta-preset li:nth-child(2) a").css("color", "#D0D8D7");


		jQuery(".ta-preset li:nth-child(3)").css({
				"background":"#F1AB66",
				"color": "#50352F"
		});
		jQuery(".ta-preset li:nth-child(3) .pos").css({
			"color": "#50352F",
			"font-size": "22px"
		});
		jQuery(".ta-preset li:nth-child(3) a").css("color", "#50352F");
	}
	

	///******************************GAMB****************FAST CLONE*/************

	ranking_footer_first_text = jQuery(".ul-ranking-footer li:nth-child(1)").text();
	var matches2 = regExpGetValueInParentisi.exec(ranking_footer_first_text);
	var ranking_footer_first_qtddpomo = parseInt(matches2[1]);
	var min_width_percentage = 70;
	//
	jQuery( ".ul-ranking-footer li").each(function(i, b) {
		jQuery(this).prepend("<span class=pos>"+(i+1)+"</span>");
		//
		inner_text_li_footer = (jQuery(this).text());
		//alert(inner_text_li_footer);
		var matches = regExpGetValueInParentisi.exec(inner_text_li_footer);
		qtddpomo = parseInt(matches[1]);
		//alert(qtddpomo);
		resizing = min_width_percentage + ((((qtddpomo/ranking_footer_first_qtddpomo)/10)*2)*100);
		//alert(res);
		jQuery( this ).width( (resizing) + "%" );
		jQuery( this ).find('a').width( (resizing-15) + "%" );
	});
	jQuery(".ul-ranking-footer li:nth-child(1)").css({
			"background":"#FFF379",
			"color": "#9B7529",
	});
	jQuery(".ul-ranking-footer li:nth-child(1) .pos").css({
		"color": "#9B7529",
		//"font-size": "30px"
	});
	jQuery(".ul-ranking-footer li:nth-child(1) a").css("color", "#9B7529");

	jQuery(".ul-ranking-footer li:nth-child(2)").css({
			"background":"#98969B",
			"color": "#D0D8D7"
	});
	jQuery(".ul-ranking-footer li:nth-child(2) .pos").css({
		"color": "#D0D8D7",
		//"font-size": "26px"
	});
	jQuery(".ul-ranking-footer li:nth-child(2) a").css("color", "#D0D8D7");


	jQuery(".ul-ranking-footer li:nth-child(3)").css({
			"background":"#F1AB66",
			"color": "#50352F"
	});
	jQuery(".ta-preset li:nth-child(3) .pos").css({
		"color": "#50352F",
		//"font-size": "22px"
	});
	jQuery(".ul-ranking-footer li:nth-child(3) a").css("color", "#50352F");
	
	//**********//
	jQuery( ".abrir_login" ).click(function() {
		jQuery( "#loginlogbox" ).toggle("slow");
	});
	jQuery( "#settings_panel" ).click(function() {
		jQuery( "#settingsbox" ).toggle("slow");
	});
});		

</script>
<!--a class="github-fork-ribbon right-bottom" href="http://url.to-your.repo" title="Fork me on GitHub">Fork me on GitHub</a-->
	
<?php do_action( 'bp_after_footer' ) ?>

<?php wp_footer(); ?>
<?php 
/*
<!--div id="footer-info">
				    <p id="assinatura">Desenvolvido por F5 Sites <br /> <a href="http://www.f5sites.com">www.f5sites.com</a></p>
				    <?php /*<p><?php printf( __( '%s is proudly powered by <a href="http://mu.wordpress.org">WordPress MU</a>, <a href="http://buddypress.org">BuddyPress</a>', 'buddypress' ), bloginfo('name') ); ?> and <a href="http://www.avenueb2.com">Avenue B2</a></p>
				</div-->

/*
					<!--div class="col-sm-3">
						<h3>Páginas</h3>
						<ul>
							<li><a href="<?php bloginfo('url'); ?>">Início</a></li>
							<?php if ( is_user_logged_in() ) { ?> 
								<li><a href="<?php bloginfo('url'); ?>/focar">Focar</a></li>
								<li><a href="<?php bloginfo('url'); ?>/colegas/<?php  $current_user = wp_get_current_user(); echo $current_user->display_name  ?>">Produtividade</a></li>
							<?php } ?>
							<li><a href="<?php bloginfo('url'); ?>/colegas">Amigos</a></li>
							<li><a href="<?php bloginfo('url'); ?>/mural">Mural</a></li>
							<li><a href="<?php bloginfo('url'); ?>/ranking">Ranking</a></li>
							<li><a href="<?php bloginfo('url'); ?>/calendar">Calendário</a></li>
						</ul>
						<?php //wp_list_pages("title_li=&include=8,3096,381,4814"); ?>
					</div-->
					*/ ?>
</body>
</html>