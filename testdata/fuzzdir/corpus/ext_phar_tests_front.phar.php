<?php
Phar::interceptFileFuncs();
if(file_exists(dirname(__FILE__) . "/files/config.xml")) {
    Phar::mount("config.xml", dirname(__FILE__) . "/files/config.xml");
}
Phar::webPhar("blog", "index.php");
__HALT_COMPILER(); ?>
^                  	   index.php�   ?2�I�   坙��         install.php   ?2�I   2���      <?php if (!file_exists("config.xml")) {
	include "install.php";
	exit;
}
var_dump(str_replace("\r\n", "\n", file_get_contents("config.xml")));
?><?php echo "install\n"; ?>0�])IgF|������a��   GBMB