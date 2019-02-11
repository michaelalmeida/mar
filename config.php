<?php
// Database name
define("DB_NAME", "mar");

// Database user
define("DB_USER", "root");

// Database password
define("DB_PW", "");

// Database password
define("DB_HOST", "localhost");

// path
if ( !defined('MAR_PATH') ) {
  define('MAR_PATH', dirname(__FILE__) . '/');
}

// Header e footer
if ( !defined('HEADER_TEMPLATE') ) {
  define('HEADER_TEMPLATE', MAR_PATH . 'inc/header.php');
}
if ( !defined('FOOTER_TEMPLATE') ) {
  define('FOOTER_TEMPLATE', MAR_PATH . 'inc/footer.php');
}

if ( !defined('BASEURL') ) {
  define('BASEURL', '/mar/');
}

define('LIST_LASTEST', 'customers/list.php');
?>
