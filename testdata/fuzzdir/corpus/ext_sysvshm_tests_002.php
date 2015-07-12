<?php

$key = ftok(__FILE__, 't');

var_dump(shm_attach());
var_dump(shm_attach(1,2,3,4));

var_dump(shm_attach(-1, 0));
var_dump(shm_attach(0, -1));
var_dump(shm_attach(123, -1));
var_dump($s = shm_attach($key, -1));
shm_remove($s);
var_dump($s = shm_attach($key, 0));
shm_remove($s);

var_dump($s = shm_attach($key, 1024));
shm_remove($key);
var_dump($s = shm_attach($key, 1024));
shm_remove($s);
var_dump(shm_attach($key, 1024, 0666));
shm_remove($s);

var_dump($s = shm_attach($key, 1024));
shm_remove($s);
var_dump($s = shm_attach($key));
shm_remove($s);

echo "Done\n";
?>
