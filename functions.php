//ajout du titre
function ajout_title(){
 add_theme_support("title_tag");

}
add_action("after_setup_theme","ajout_titre");
