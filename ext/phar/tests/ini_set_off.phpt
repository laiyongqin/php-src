--TEST--
Phar - test ini_set with readonly and require_hash disabled
--SKIPIF--
<?php if (!extension_loaded("phar")) print "skip";?>
--INI--
phar.require_hash=0
phar.readonly=0
--FILE--
<?php
var_dump(ini_set('phar.require_hash', 1));
var_dump(ini_set('phar.readonly', 1));
var_dump(ini_get('phar.require_hash'));
var_dump(ini_get('phar.readonly'));
var_dump(ini_set('phar.require_hash', 0));
var_dump(ini_set('phar.readonly', 0));
var_dump(ini_get('phar.require_hash'));
var_dump(ini_get('phar.readonly'));
__HALT_COMPILER();
?>
--EXPECT--
string(1) "0"
string(1) "0"
string(1) "1"
string(1) "1"
string(1) "1"
string(1) "1"
string(1) "0"
string(1) "0"
