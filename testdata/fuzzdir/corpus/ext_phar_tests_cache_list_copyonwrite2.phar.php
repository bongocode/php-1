<?php
$phar = new Phar(__FILE__);
var_dump($phar->getMetadata());
mkdir("phar://" . __FILE__ . "/test");
var_dump(is_dir("phar://" . __FILE__ . "/test"));
$phar2 = new Phar(__FILE__);
var_dump($phar2->getMetadata());
var_dump(isset($phar["test"]));
var_dump(isset($phar2["test"]));
echo "ok\n";
__HALT_COMPILER(); ?>
H              	   s:2:"hi";   test.txt   �A�H   zzo��  	   s:2:"hi";hi
]	iNzθ�j�Jv�Uȱ�f   GBMB