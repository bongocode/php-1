<?php
/* Prototype  : array scandir(string $dir [, int $sorting_order [, resource $context]])
 * Description: List files & directories inside the specified path 
 * Source code: ext/standard/dir.c
 */

/*
 * remove the execute permission from the parent dir and test scandir() on child dir
 * 1. remove write & execute permission from the 1st parent and test scandir()
 * 2. remove execute permission from 2nd parent and test scandir()
 */

echo "*** Testing scandir() : usage variations ***\n";

/* 
 * create the temporary directory :
 * scandir_variation5  ( parent )
 *  |-> sub_dir     ( sub parent )
 *      |-> child_dir  ( child dir)
 */

$parent_dir_path = dirname(__FILE__) . "/scandir_variation5";
mkdir($parent_dir_path);
chmod($parent_dir_path, 0777);

// create sub_dir
$sub_dir_path = $parent_dir_path . "/sub_dir";
mkdir($sub_dir_path);
chmod($sub_dir_path, 0777);

//create sub_sub_dir
$child_dir_path = $sub_dir_path."/child_dir";
mkdir($child_dir_path);

// remove the write and execute permisson from sub parent
chmod($sub_dir_path, 0444);

echo "\n-- After restricting 1st level parent directory --\n";
var_dump(scandir($child_dir_path));

// remove the execute permisson from parent dir, allowing all permission for sub dir
chmod($sub_dir_path, 0777); // all permisson to sub dir
chmod($parent_dir_path, 0666); // restricting parent directory

echo "\n-- After restricting parent directory --\n";
var_dump(scandir($child_dir_path));
?>
===DONE===
