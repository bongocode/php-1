<?php
$p = new Phar(__FILE__);
var_dump($p["test.txt"]->isCompressed());
$p["test.txt"]->compress(Phar::GZ);
var_dump($p["test.txt"]->isCompressed());
echo "ok\n";
__HALT_COMPILER(); ?>
6                     test.txt   {��H   ���E�      <?php __HALT_COMPILER();u:ΰ�U��|ZM�̧�Є�   GBMB