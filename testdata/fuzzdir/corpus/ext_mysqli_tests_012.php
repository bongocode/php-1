<?php
	require_once("connect.inc");

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	if (!mysqli_query($link, "DROP TABLE IF EXISTS test_bind_result"))
		printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	$rc = mysqli_query($link, "CREATE TABLE test_bind_result(c1 tinyint, c2 smallint,
														c3 int, c4 bigint,
														c5 float, c6 double,
														c7 varbinary(10),
														c8 varchar(10)) ENGINE=" . $engine);
	if (!$rc)
		printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	if (!mysqli_query($link, "INSERT INTO test_bind_result VALUES(120,2999,3999,54,
															2.6,58.89,
															'206','6.7')"))
		printf("[003] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	$stmt = mysqli_prepare($link, "SELECT * FROM test_bind_result");
	mysqli_stmt_bind_result($stmt, $c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_fetch($stmt);

	$test = array($c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8);

	var_dump($test);

	mysqli_stmt_close($stmt);
	mysqli_query($link, "DROP TABLE IF EXISTS test_bind_result");
	mysqli_close($link);
	print "done!";
?>
