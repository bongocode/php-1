<?php
clearstatcache();
var_dump(file_exists("phar://" . __FILE__ . "/test"), is_dir("phar://" . __FILE__ . "/test"));
rmdir("phar://" . __FILE__ . "/test");
clearstatcache();
var_dump(file_exists("phar://" . __FILE__ . "/test"), is_dir("phar://" . __FILE__ . "/test"));
echo "ok\n";
__HALT_COMPILER(); ?>
i             	   s:2:"hi";   test.txt   ���H   zzo��  	   s:2:"hi";   test/    ���H        �      hi
g��ja{��lH$���   GBMB