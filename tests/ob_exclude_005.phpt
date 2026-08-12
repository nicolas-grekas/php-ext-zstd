--TEST--
built-in output compression exclude list: wildcard match (no ini set)
--SKIPIF--
<?php
include (dirname(__FILE__) . '/ob_skipif.inc');
?>
--INI--
zstd.output_compression=1
--ENV--
HTTP_ACCEPT_ENCODING=zstd
--GET--
ob=024
--FILE--
<?php
header('Content-Type: audio/mpeg');
echo "hi\n";
?>
--EXPECT--
hi
