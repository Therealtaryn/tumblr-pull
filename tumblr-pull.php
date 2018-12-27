<?php
/*
Plugin Name: Tumblr Pull
Description: Pull content from Tumblr
Version: 0.0.1
Author: Taryn Greer
*/
add_action( 'admin_enqueue_scripts', 'wp_enqueue_tumblr_scripts' );
add_action( 'add_management_page', 'tumblr_pull_management_page')
add_action ('admin_menu', function () {
    add_management_page('Tumblr Pull', 'Tumblr Pull', 'install_plugins', 'TP', 'tumblr_pull_management_page', '');
});

function wp_enqueue_tumblr_scripts() {
  wp_enqueue_style( 'tumblr-pull-css', plugins_url( 'tumblr-pull.css', __FILE__ , array(), time()));
  //wp_enqueue_script('tumblr-pull-js', plugins_url( 'tumblr-pull.js', __FILE__ ), array('jquery'), time());
}

//function tumblr_pull_management_page() {
  //add_management_page(Tumblr Pull, Tumblr Pull Menu Title, $capability, tumlr-pull.php, $function);)
//}


function tumblr_pull_management_page()
{
    echo 'This is content of the page';
}
// Authenticate via API Key
//$client = new Tumblr\API\Client('uJPplwndks0Jbx0LwKbVMSl7OGCrAl261vlhvpTAUAFrfD5NAi');

// Make the request
//$client->getBlogPosts('fuckyeahcakedecorating-blog.tumblr.com', array('reblog_info' => true, 'notes_info' => true));

?>
//Body of index
<p align=center> Butt Time! </p>
<div class=content align=center>
  <input type='button' id='tumblr-pull-trigger' value='Pull'/>
</div>
<?php
