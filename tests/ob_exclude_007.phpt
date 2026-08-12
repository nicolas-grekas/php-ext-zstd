--TEST--
zstd.output_compression_exclude_types negation token overrides built-in exclusion
--SKIPIF--
<?php
include (dirname(__FILE__) . '/ob_skipif.inc');
?>
--INI--
zstd.output_compression=1
zstd.output_compression_exclude_types="!image/png"
--ENV--
HTTP_ACCEPT_ENCODING=zstd
--GET--
ob=026
--FILE--
<?php
header('Content-Type: image/png');
echo "hi\n";
?>
--EXPECT_EXTERNAL--
files/ob_001.zstd
--EXPECTHEADERS--
Content-Encoding: zstd
Vary: Accept-Encoding
