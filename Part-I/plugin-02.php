<?php
    /*
        Plugin Name:01 - PEM - Un Plugin quelconque
        Plugin URI: https://github.com/Birnou/WP-Plugin-Base
        Description: Travail de mise en place de plugin avec WordPress
        	         et s'assurer de la bonne compatibilité de WordPress
        Author:Birnou
        Author URI: http://www.puce-et-media.com
        Version 0.0.2
        License: MIT
    */
    
    // vérifie et bloque un éventuel appel en direct    
    defined( 'ABSPATH' ) or die( 'Soyons simple!' );

    // autorise ou non l'activation du plugin, ici contrôle de la version de WOrdPress
    global $wp_version;
    if ( !version_compare($wp_version, "3.0", ">=")){
        die ("Votre version de WP doit être mise à jour pour utiliser ce plugin.");
    }

?>
