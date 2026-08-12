--TEST--
zstd.output_compression_exclude_types built-in exclusion applies by default
--SKIPIF--
<?php
include (dirname(__FILE__) . '/ob_skipif.inc');
?>
--INI--
zstd.output_compression=1
--ENV--
HTTP_ACCEPT_ENCODING=zstd
--GET--
ob=025
--FILE--
<?php
header('Content-Type: image/png');
echo "hi\n";
?>
--EXPECT--
hi
