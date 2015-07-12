<?php
$handler = "db4";
require_once(dirname(__FILE__) .'/test.inc');
echo "database handler: $handler\n";
if (($db_file=dba_open($db_filename, "c", $handler))!==FALSE) {
    var_dump(dba_insert("key1", "Content String 1", $db_file));
    var_dump(dba_insert("key2", "Content String 2", $db_file));
    var_dump(dba_insert("key2", "Same key", $db_file));
    echo dba_fetch("key1", $db_file), "\n";
    echo dba_fetch("key2", $db_file), "\n";
    dba_close($db_file);
} else {
    echo "Error creating database\n";
}

?>
