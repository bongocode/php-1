<?php
function s($a)
{
}
try {
Phar::webPhar("test.phar", "/index.php", null, array(), "s");
} catch (Exception $e) {
die($e->getMessage() . "\n");
}
echo "oops did not run\n";
var_dump($_ENV, $_SERVER);
__HALT_COMPILER(); ?>
7                  	   index.php   )�H   JVԋ�      <?php
echo "hi";
�J1`�=ؾ r�GM�@�g   GBMB