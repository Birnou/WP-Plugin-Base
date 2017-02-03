<?php
    /*
        Plugin Name:01 - PEM - Un Plugin quelconque
        Plugin URI: https://github.com/Birnou/WP-Plugin-Base
        Description: Travail de mise en place de plugin avec WordPress
        	         s'assurer de la bonne compatibilité de WordPress
        	         contrôler l'activation / désactivation et executer une action
        Author:Birnou
        Author URI: http://www.puce-et-media.com
        Version 0.0.3
        License: MIT
    */
    
    // vérifie et bloque un éventuel appel en direct    
    defined( 'ABSPATH' ) or die( 'Soyons simple!' );

    // autorise ou non l'activation du plugin, ici contrôle de la version de WOrdPress
    global $wp_version;
    if ( !version_compare($wp_version, "3.0", ">=")){
        die ("Votre version de WP doit être mise à jour pour utiliser ce plugin.");
    }
    
    // émet une action lors de l'activation ou la désactivation du plugin    
    function activation_du_plugin(){
       write_log("Pour informations: il vient d'y avoir activation.");

    }
    register_activation_hook(__FILE__, "activation_du_plugin");

    function desactivation_du_plugin(){
       write_log("Pour informations: il vient d'y avoir desactivation.");

    }
    register_deactivation_hook(__FILE__, "desactivation_du_plugin");
    
    // émet une action lors de la désinstallation du plugin    
    function desinstallation_du_plugin(){
       write_log("Pour informations: le plugin a été désinstallé.");

    }
    register_uninstall_hook(__FILE__, "desinstallation_du_plugin");

?>
