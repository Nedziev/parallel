--TEST--
parallel bootstrap exception
--SKIPIF--
<?php
if (!extension_loaded('parallel')) {
	echo 'skip';
}
?>
--FILE--
<?php

try {
	$parallel = new \parallel\Runtime(sprintf("%s/bootstrape.php", __DIR__));
} catch (Exception $ex) {
	var_dump($ex->getMessage());
}
?>
--EXPECTF--
string(%d) "bootstrapping Runtime failed with %s/bootstrape.php"




