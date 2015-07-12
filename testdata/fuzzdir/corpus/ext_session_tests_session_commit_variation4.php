<?php

ob_start();

/*
 * Prototype : bool session_commit(void)
 * Description : Write session data and end session
 * Source code : ext/session/session.c
 */

echo "*** Testing session_commit() : variation ***\n";

var_dump(ini_get('session.use_strict_mode'));
var_dump(session_id("test"));
var_dump(session_start());
var_dump(session_id());
var_dump(session_commit());
var_dump(session_id());
var_dump(session_start());
var_dump(ini_get('session.use_strict_mode'));
var_dump(session_id());
var_dump(session_commit());
var_dump(session_id());
var_dump(session_start());
var_dump(session_id());
var_dump(session_commit());
var_dump(session_id());
var_dump(session_start());
var_dump(session_destroy());
var_dump(ini_get('session.use_strict_mode'));

echo "Done";
ob_end_flush();
?>
