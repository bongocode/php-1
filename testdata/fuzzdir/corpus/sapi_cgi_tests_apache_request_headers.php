<?php
include "include.inc";

$php = get_cgi_path();
reset_env_vars();

$file = dirname(__FILE__)."/012.test.php";

file_put_contents($file, '<?php print_r(apache_request_headers()); ?>');

passthru("$php -n $file");

$names = array('HTTP_X_TEST', 'HTTP_X__TEST', 'HTTP_X_');
foreach ($names as $name) {
	putenv($name."=".str_repeat("A", 256));
	passthru("$php -n -q $file");
	putenv($name);
}
unlink($file);

echo "Done\n";
?>
