<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '123456');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?U),n~)jd=M^jBYD$/g&T!DNB_/^L>-GXk+B2V9^IZ~EOMvq$# X{IoN4_TJe;,f');
define('SECURE_AUTH_KEY',  '11|NE]x]Ic;C6MFOvAiIwiN71*4.#35lSE7<n80_^s+GwL7=,919QFo{Bb7F)zE;');
define('LOGGED_IN_KEY',    '39b+6qYpLQ|VcnLAqELH/Gk,cD5(%6h3wm]WgA*_CQ{)FN-=KsiBRVZ/OE6+M@}>');
define('NONCE_KEY',        '~@-?m>jOM(/w x%/;ZBV(T?W4hpOHA+(v5Q3P4|;`A.f9_AvV3Gvpm~.(y<7-ZLD');
define('AUTH_SALT',        'A=[5^EU7k<XkA2BT]gz]*x+iID<EQQ.X)LkaOX 2fb?.i4Tg2Dy>8!8i!S_Yf~DF');
define('SECURE_AUTH_SALT', 'pB4k9]2]K9J076_%eF y:w:/f{K0y(qP[%c3q5 Li59KD1! [Ppx20d$Y8&O(j|`');
define('LOGGED_IN_SALT',   '-R(]IBfZUs_|Z>GM(ph8#vf9EAPKudLvbylio<9^s7Zl.9V$Uc<N&lu;cgM?I}NR');
define('NONCE_SALT',       'wALoEH1q@g_6h$Kq[o-=!`Y_68#dI2oUPtaD-&7g{-l>H!:3Qk<1]1 -ef,s.<6V');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

/** Override default file permissions */
if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}
