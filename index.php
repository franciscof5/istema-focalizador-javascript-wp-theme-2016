<?php 
get_header(); 
//$page = strtok(basename($_SERVER["REQUEST_URI"]),'?');
#global $pagenow;
#var_dump($pagenow);die;
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
//
if(dirname($uri_parts[0])!="/") {
	$page = explode("/", dirname($uri_parts[0]));
	$page = $page[1];
} else {
	$page = basename($uri_parts[0]);
}
#var_dump($page);die;
//
$pages = array("focar", "calendar", "ranking", "produtividade", "stats", "csv", "metas", "premios", "game", "invite", "ticket", "product", "tag");
//
$pages_open = array("plugins-br", "product", "br", "carrinho");
if(!in_array($page, $pages)) {
	wp_enqueue_style('fonts-css');
	$page = "index";
} else {
	if (!is_user_logged_in()) {
		if(!in_array($page, $pages_open))
		$page = "closed";
	} else {
		if($page=="focar") {
			wp_enqueue_script("sound-js");
			wp_enqueue_script("pomodoros-js");
			#wp_enqueue_script("projectimer-pomodoros-shared-parts-js");
			wp_enqueue_script("rangeslider-js");
			wp_enqueue_script("artyom-js");
		}
	}
}

locate_template( "part-".$page.".php", true );

get_footer();