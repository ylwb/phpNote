<?php
define('EV_TIMEOUT', 1);
define('EV_READ', 2);
define('EV_WRITE', 4);
define('EV_SIGNAL', 8);
define('EV_PERSIST', 16);
define('EVLOOP_ONCE', 1);
define('EVLOOP_NONBLOCK', 2);
define('EVBUFFER_READ', 1);
define('EVBUFFER_WRITE', 2);
define('EVBUFFER_EOF', 16);
define('EVBUFFER_ERROR', 32);
define('EVBUFFER_TIMEOUT', 64);
function event_base_new(){}
function event_base_free($event_base) {}
function event_base_loop($event_base, $flags = null) {}
function event_base_loopbreak($event_base) {}
function event_base_loopexit($event_base, $timeout = -1) {}
function event_base_set($event, $base) {}
function event_base_priority_init($event_base, $npriorities) {}
function event_new() {}
function event_free($event) {}
function event_add($event, $timeout = -1) {}
function event_set($event, $fd, $events, $callback, $arg = null) {}
function event_del($event) {}
function event_buffer_new($stream, $readcb, $writecb, $errorcb, $arg = null) {}
function event_buffer_free($bevent) {}
function event_buffer_base_set($bevent, $event_base) {}
function event_buffer_priority_set($bevent, $priority) {}
function event_buffer_write($bevent, $data, $data_size = -1) {}
function event_buffer_read($bevent, $data_size) {}
function event_buffer_enable($bevent, $events) {}
function event_buffer_disable($bevent, $events) {}
function event_buffer_timeout_set($bevent, $read_timeout, $write_timeout) {}
function event_buffer_watermark_set($bevent, $events, $lowmark, $highmark) {}
function event_buffer_fd_set($bevent, $fd) {}
function event_buffer_set_callback($bevent, $readcb, $writecb, $errorcb, $arg = null) {}
function event_timer_new() {}
function event_timer_set($event, $callback, $arg = null) {}
function event_timer_pending($event, $timeout = -1) {}
function event_timer_add($event, $timeout = -1) {}
function event_timer_del($event) {}
