<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'mtcount_wp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')TGSTk%:Q<+*+K#G3<;6&.LhtQ-`y^EP@QbY6F|m%,X%d9E98`ckTF{:NJw/c/%C' );
define( 'SECURE_AUTH_KEY',  '|U#>D2Kl&|nlj>yuz`uF}uct$e;P1/R9,8aVXDK68*%xnn):NF&}+N~}H.^t7`Dn' );
define( 'LOGGED_IN_KEY',    'C?[R=JOJ>*b8G7eb;^76ihG,CGYp%6{vF n9:OV<QK0.1S!;+;pB&(r#;a82>Cyk' );
define( 'NONCE_KEY',        '{HOZXaBybNSyGyhK]d&&54!Z,d><UKRJaLW=f-~KZukG}rL[8S}iAeG-s`mfFSYG' );
define( 'AUTH_SALT',        'W Z_Mxsw2EDg0+0$N8*<PXK-B0%.<Dg!Y9zMZYFS^v;i$cW+:oC(ryxQOBQW34em' );
define( 'SECURE_AUTH_SALT', 'Tn#a3y497Q1GPt`0,~)qv~qYSxq5!c%8Jv<Q<a/LaIm:C t6}OzB7.ZmU<WG_b&$' );
define( 'LOGGED_IN_SALT',   '?H#w !K94?XVD!*jR_3VzwGr88:ZByc=B~H4y^;%/(U nD-:jWW#)30,A_^?`m=%' );
define( 'NONCE_SALT',       'tGx@4&+PMUB8WriFo~_~909_{LFg&6ylJU;zQ`Jo,$.x<|/:4Du}ps ,ffu7Rty$' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
