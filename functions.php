<?php
    /* 
        @ Thiết lập các hằng dữ liệu quan trọng
        @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
        @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.

    */
         define( 'THEME_URL', get_stylesheet_directory() );
         define( 'CORE', THEME_URL . '/core' );

    /*
        @ Load file /core/init.php
        @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
    */
        require_once( CORE . '/init.php' );
    
    /*
        @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
    */
        if ( ! isset( $content_width ) ) {
          /*Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó*/
          $content_width = 620;
        }

    /* @ Thiết lập các chức năng sẽ được theme hỗ trợ*/
        if ( ! function_exists( 'ducbinh_theme_setup' ) ) {
         /*Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó*/
            function ducbinh_theme_setup() {
        /*Thiết lập textdomain*/
            $language_folder = THEME_URL . '/languages';
            load_theme_textdomain( 'ducbinh', $language_folder );
        /*Tự động thêm link RSS lên <head>*/
           /* add_theme_support( 'automatic-feed-links' );*/
        /* Thêm chức năng post thumbnail*/
            add_theme_support( 'post-thumbnails' );
        /*Thêm chức năng title-tag để tự thêm <title> */
            add_theme_support( 'title-tag' );
        /*Thêm chức năng post format */
            add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
             )
            );
        /*Thêm chức năng custom background */
        $default_background = array(
            'default-color' => '#e8e8e8',
         );
         add_theme_support( 'custom-background', $default_background );
        /* Menu */
        register_nav_menus(
           array(
                    'main-nav' => 'Menu chính'
                )
        );
      /*  wp_nav_menu( array(
            'theme_location' => 'main-nav', // tên location cần hiển thị
            'container' => '', // thẻ container của menu
            'container_class' => 'main-nav', //class của container
            'menu_class' => 'nav-item industries' // class của menu bên trong
         ) );*/
         
         /*Sidebar */
                 $sidebar = array(
                    'name' => __('Main Sidebar', 'ducbinh'),
                    'id' => 'main-sidebar',
                    'description' => 'Main sidebar for DucBinh theme',
                    'class' => 'main-sidebar',
                    'before_title' => '<h3 class="widgettitle">',
                    'after_sidebar' => '</h3>'
                 );
                 register_sidebar( $sidebar );
        
        }
         add_action ( 'init', 'ducbinh_theme_setup' );
        };

   /*==== Nhung style.css */
   function mtcount_style(){
       wp_register_style('main-style', get_template_directory_uri() ."/css/styles-d1b3b2.css", 'all');
       wp_enqueue_style('main-style');
   }
   add_action('wp_enqueue_scripts', 'mtcount_style');


    
   
?>  