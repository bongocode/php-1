<?php
require_once(dirname(__FILE__) .'/test.inc');
echo "database handler: $handler\n";

if (($db_file=dba_open($db_file, "n", $handler))!==FALSE) {
    dba_insert(array(), "Content String 1", $db_file);
} else {
    echo "Error creating database\n";
}

?>
