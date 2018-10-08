<script language="javascript">
	document.title = "Pomodoros <?php global $title_apendix; echo $title_apendix.' » ';_e('Mobile', 'sis-foca-js'); ?>";
</script>

<div id="center_layout" class="col-md-8 col-md-offset-2">
	
	
	<h2 class="forte" style="margin:50px;"><?php _e("Pomodoros Mobile", "sis-foca-js"); ?></h2>
	<p class="bg-danger" style="margin:50px; font-size: 14px; padding:20px;"><a href="#" class="abrir_login"><?php _e("Login", "sis-foca-js"); ?></a> <?php _e("to access app", "sis-foca-js"); ?></p>
	<p style="margin:50px;">
		<?php 
		if(function_exists("show_lang_options"))
			show_lang_options(); ?>
	</p>

	<center>		
		<?php echo show_sponsor(true); ?>
	</center>
</div>
