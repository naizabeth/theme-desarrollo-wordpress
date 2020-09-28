<?php
//Registrar un nuevo menu
function agregar_menu(){
    register_nav_menu('principal',__('principal'));
}
//enganchamos el menu
 add_action('init','agregar_menu');
 
 
 function mostrar_menu(){

 wp_nav_menu([
     'principal'=>'principal'
 ]);

}
// vamos a crear funcion para controlar el excerpt
function excerpt_personalizado($lenght){
    return 20;
}
add_filter('excerpt_lenght', 'excerpt_personalizado');
// añadimos soporte de thumbnails
add_theme_support('post-thumbnails');

// vamos a  realizar un shortcode
function firma_guay(){
    return 'soy naizabeth';
}

add_shortcode('firma','firma_guay');


?>