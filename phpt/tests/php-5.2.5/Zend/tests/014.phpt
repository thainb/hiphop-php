--TEST--
get_included_files() tests
--FILE--
<?php

var_dump(get_included_files());

include(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

///var_dump(get_included_files(1,1));

include_once(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

///var_dump(get_included_files(1));

include(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

echo "Done\n";
?>
--EXPECTF--	
array(1) {
  [0]=>
  string(%d) "%s"
}
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}

Warning: Wrong parameter count for get_included_files() in %s on line %d
NULL
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}

Warning: Wrong parameter count for get_included_files() in %s on line %d
NULL
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}
Done
