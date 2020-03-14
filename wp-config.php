<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'test' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S>:9l%aL:S?jie[r8F5eww/&ThB,H#f/:Xx}YY7ReG ijtVu:dT2tRZ&*8sKzd9|' );
define( 'SECURE_AUTH_KEY',  'rWnM+C+|QProJO}u XQx4zc-afC`a,zRn.3n91hxl!VM8tL*i:hMSke!ypLu4kkm' );
define( 'LOGGED_IN_KEY',    'hzSu&/JxA=2{bm=;znNSSosf^3:=6s/Ms^58_{V7+B*]lX$@]qS!!Dro23?`^Xb9' );
define( 'NONCE_KEY',        ')tQ9/nJyZ2D^oLB;V$*x!O8{vC*a3B*&BHKky5K!29l7uk~D[{@wnPe=^9BCWm5B' );
define( 'AUTH_SALT',        'sG3?2BurN1 7RI%p*EEB:8jo4rpd=.lm:-!-9zA3T7[*bj}F4T<q?tSt=qxTD(kG' );
define( 'SECURE_AUTH_SALT', '@~EkZ;W5%nj70kguFDSU_?LWo]cnCZycxZ/:NCfl%HfHkQpuQBSM#>Y{%q*.6nO)' );
define( 'LOGGED_IN_SALT',   't)O4=awxbT.ISU#qXRP[-)!bS!K9a<XwTuSL)f_V2+St-b0P4/`$y.zR:=71-#kx' );
define( 'NONCE_SALT',       'k`3(bv@84x]_,2HCsCodz:|#XIDBMt!02r./:qqEI3~0d^m/Zn!ukzw.B<6.{]ox' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
