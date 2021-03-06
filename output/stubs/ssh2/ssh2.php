<?php
function ssh2_connect ($host, $port = null, array $methods = null , array $callbacks = null ) {}
function ssh2_methods_negotiated ($session) {}
function ssh2_fingerprint ($session, $flags = null) {}
function ssh2_auth_none ($session, $username) {}
function ssh2_auth_password ($session, $username, $password) {}
function ssh2_auth_pubkey_file ($session, $username, $pubkeyfile, $privkeyfile, $passphrase = null) {}
function ssh2_auth_hostbased_file ($session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase = null, $local_username = null) {}
function ssh2_forward_listen () {}
function ssh2_forward_accept () {}
function ssh2_shell ($session, $term_type = null, array $env = null , $width = null, $height = null, $width_height_type = null) {}
function ssh2_exec ($session, $command, $pty = null, array $env = null , $width = null, $height = null, $width_height_type = null) {}
function ssh2_tunnel ($session, $host, $port) {}
function ssh2_scp_recv ($session, $remote_file, $local_file) {}
function ssh2_scp_send ($session, $local_file, $remote_file, $create_mode = null) {}
function ssh2_fetch_stream ($channel, $streamid) {}
function ssh2_poll (&$var1) {}
function ssh2_sftp ($session) {}
function ssh2_sftp_rename ($sftp, $from, $to) {}
function ssh2_sftp_unlink ($sftp, $filename) {}
function ssh2_sftp_mkdir ($sftp, $dirname, $mode = null, $recursive = null) {}
function ssh2_sftp_rmdir ($sftp, $dirname) {}
function ssh2_sftp_stat ($sftp, $path) {}
function ssh2_sftp_lstat ($sftp, $path) {}
function ssh2_sftp_symlink ($sftp, $target, $link) {}
function ssh2_sftp_readlink ($sftp, $link) {}
function ssh2_sftp_realpath ($sftp, $filename) {}
function ssh2_publickey_init ($session) {}
function ssh2_publickey_add ($pkey, $algoname, $blob, $overwrite = null, array $attributes = null ) {}
function ssh2_publickey_remove ($pkey, $algoname, $blob) {}
function ssh2_publickey_list ($pkey) {}
define ('SSH2_FINGERPRINT_MD5', 0);
define ('SSH2_FINGERPRINT_SHA1', 1);
define ('SSH2_FINGERPRINT_HEX', 0);
define ('SSH2_FINGERPRINT_RAW', 2);
define ('SSH2_TERM_UNIT_CHARS', 0);
define ('SSH2_TERM_UNIT_PIXELS', 1);
define ('SSH2_DEFAULT_TERMINAL', "vanilla");
define ('SSH2_DEFAULT_TERM_WIDTH', 80);
define ('SSH2_DEFAULT_TERM_HEIGHT', 25);
define ('SSH2_DEFAULT_TERM_UNIT', 0);
define ('SSH2_STREAM_STDIO', 0);
define ('SSH2_STREAM_STDERR', 1);
define ('SSH2_POLLIN', 1);
define ('SSH2_POLLEXT', 2);
define ('SSH2_POLLOUT', 4);
define ('SSH2_POLLERR', 8);
define ('SSH2_POLLHUP', 16);
define ('SSH2_POLLNVAL', 32);
define ('SSH2_POLL_SESSION_CLOSED', 16);
define ('SSH2_POLL_CHANNEL_CLOSED', 128);
define ('SSH2_POLL_LISTENER_CLOSED', 128);
