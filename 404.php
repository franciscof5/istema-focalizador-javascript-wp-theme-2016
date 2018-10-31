<?php 
//OLD index.php
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
$isWebView = false;
if((strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile/') !== false) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari/') == false)) :
    $isWebView = true;
elseif(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) :
    $isWebView = true;
endif;
if (strpos($_SERVER['HTTP_USER_AGENT'], 'com.f5sites.pomodoros') !== false)
	$isWebView = true;

/*if(!$isWebView)
echo "webv: NOT";
else
echo "webv: SI";*/
//
$pages = array("focus", "calendar", "ranking", "produtividade", "stats", "csv", "metas", "premios", "game", "invite", "help", "product", "tag");
//
$pages_open = array("register", "product", "br", "carrinho", "app", "news");
if(!in_array($page, $pages)) {
	if(!in_array($page, $pages_open))
		$page = "index";
} else {
	if (!is_user_logged_in()) {
		if(!in_array($page, $pages_open))
		$page = "closed";
	} else {
		if($page=="focus") {
			
			wp_enqueue_script("pomodoros-js");
			#wp_enqueue_script("projectimer-pomodoros-shared-parts-js");
			wp_enqueue_script("rangeslider-js");
			wp_enqueue_script("sound-js");
			wp_enqueue_script("jquery-color");
			wp_enqueue_script("select2-js");
			wp_enqueue_script("select2-jsbr");
			wp_enqueue_style("select2-css");
			wp_enqueue_script("jquery-ui-js");
			wp_enqueue_style("jquery-ui-css");
			wp_enqueue_style("jquery-ui-theme-css");
			wp_enqueue_script("jquery-ui-touhc-js");
			wp_enqueue_script("nosleep-js");
			
			if(!$isWebView) {
				wp_enqueue_script("artyom-js");
			}
			//}
		}
	}
}
wp_enqueue_style('fonts-css');


locate_template( "part-".$page.".php", true );

get_footer();