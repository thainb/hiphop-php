--TEST--
DBA CDB handler test
--SKIPIF--
<?php 
	$handler = 'cdb';
	require_once('skipif.inc');
	die('info CDB does not support replace or delete');
?>
--FILE--
<?php
	$handler = 'cdb';
	require_once('test.inc');
	require_once('dba_handler.inc');
?>
===DONE===
--EXPECT--
database handler: cdb
5YYYYY
Content String 2
array(5) {
  ["key1"]=>
  string(16) "Content String 1"
  ["key2"]=>
  string(16) "Content String 2"
  ["key3"]=>
  string(20) "Third Content String"
  ["key4"]=>
  string(22) "Another Content String"
  ["key5"]=>
  string(23) "The last content string"
}
--NO-LOCK--
5YYYYY
Content String 2
array(5) {
  ["key1"]=>
  string(16) "Content String 1"
  ["key2"]=>
  string(16) "Content String 2"
  ["key3"]=>
  string(20) "Third Content String"
  ["key4"]=>
  string(22) "Another Content String"
  ["key5"]=>
  string(23) "The last content string"
}
===DONE===
