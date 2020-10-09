//ajout du titre
<?php>
function ajout_title(){
 add_theme_support("title_tag");
 //ajout du style
 function ajout_style('general',get_template_directory_uri()!css(style.css));
 // wp_enque_script ('special', get_template_directory_uri.'js/script.js')
}
add_action ('wp_enqueue_scripts','ajout_style');
add_action("after_setup_theme","ajout_titre");
