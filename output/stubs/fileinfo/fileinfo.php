<?php
class finfo  {
	public function finfo ($options, $arg) {}
	public function set_flags ($options) {}
	public function file ($file_name = null, $options = FILEINFO_NONE, $context = null) {}
	public function buffer ($string = null, $options = FILEINFO_NONE, $context = null) {}
}
function finfo_open ($options = null, $magic_file = null) {}
function finfo_close ($finfo) {}
function finfo_set_flags ($finfo, $options) {}
function finfo_file ($finfo, $file_name, $options = null, $context = null) {}
function finfo_buffer ($finfo ,$string, $options = FILEINFO_NONE, $context = NULL) {}
function mime_content_type ($filename) {}
define ('FILEINFO_NONE', 0);
define ('FILEINFO_SYMLINK', 2);
define ('FILEINFO_MIME', 1040);
define ('FILEINFO_MIME_TYPE', 16);
define ('FILEINFO_MIME_ENCODING', 1024);
define ('FILEINFO_DEVICES', 8);
define ('FILEINFO_CONTINUE', 32);
define ('FILEINFO_PRESERVE_ATIME', 128);
define ('FILEINFO_RAW', 256);
?>
