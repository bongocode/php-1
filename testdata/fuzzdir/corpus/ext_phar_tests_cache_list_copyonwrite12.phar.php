<?php
$p = new Phar(__FILE__);
var_dump($p->getSignature());
$p2 = new Phar(__FILE__);
$p->setSignatureAlgorithm(Phar::MD5);
var_dump($p->getSignature());
echo "ok\n";
__HALT_COMPILER(); ?>
6                     test.txt   ���H   ���E�      <?php __HALT_COMPILER();c�qF�Ov6&�((����r   GBMB