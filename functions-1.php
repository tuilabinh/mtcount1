<?php
    add_theme_support( 'menus' );
    register_nav_menus(
       array(
                'main-nav' => 'Menu chính'
        )
    );
?>  
       add_theme_support( 'menus' );
        register_nav_menus
        (
           array(
                    'main-nav' => 'Menu chính'
                )
        );
        wp_nav_menu( array(
            'theme_location' => 'main-nav', // tên location cần hiển thị
            'container' => '', // thẻ container của menu
            'container_class' => 'main-nav', //class của container
            'menu_class' => 'nav-item industries', // class của menu bên trong
            'menu_id' => '',
         ) );