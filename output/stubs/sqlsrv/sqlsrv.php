<?php
define('SQLSRV_ERR_ERRORS', 0);
define('SQLSRV_ERR_WARNINGS', 1);
define('SQLSRV_ERR_ALL', 2);
define('SQLSRV_LOG_SYSTEM_ALL',-1);
define('SQLSRV_LOG_SYSTEM_OFF', 0);
define('SQLSRV_LOG_SYSTEM_INIT', 1);
define('SQLSRV_LOG_SYSTEM_CONN', 2);
define('SQLSRV_LOG_SYSTEM_STMT', 4);
define('SQLSRV_LOG_SYSTEM_UTIL', 8);
define('SQLSRV_LOG_SEVERITY_ALL', -1);
define('SQLSRV_LOG_SEVERITY_ERROR', 1);
define('SQLSRV_LOG_SEVERITY_NOTICE', 4);
define('SQLSRV_LOG_SEVERITY_WARNING', 2);
define('SQLSRV_FETCH_NUMERIC', 1);
define('SQLSRV_FETCH_ASSOC', 2);
define('SQLSRV_FETCH_BOTH', 3);
define('SQLSRV_PHPTYPE_NULL', 1);
define('SQLSRV_PHPTYPE_INT', 2);
define('SQLSRV_PHPTYPE_FLOAT', 3);
define('SQLSRV_PHPTYPE_DATETIME', 4);
define('SQLSRV_ENC_BINARY', 'binary');
define('SQLSRV_ENC_CHAR','char');
define('SQLSRV_NULLABLE_NO', 0);
define('SQLSRV_NULLABLE_YES', 1);
define('SQLSRV_NULLABLE_UNKNOWN', 2);
define('SQLSRV_SQLTYPE_BIGINT', -5);
define('SQLSRV_SQLTYPE_BIT', -7);
define('SQLSRV_SQLTYPE_DATETIME', 25177693);
define('SQLSRV_SQLTYPE_FLOAT', 6);
define('SQLSRV_SQLTYPE_IMAGE', -4);
define('SQLSRV_SQLTYPE_INT', 4);
define('SQLSRV_SQLTYPE_MONEY', 33564163);
define('SQLSRV_SQLTYPE_NTEXT', -10);
define('SQLSRV_SQLTYPE_TEXT', -1);
define('SQLSRV_SQLTYPE_REAL', 7);
define('SQLSRV_SQLTYPE_SMALLDATETIME', 8285);
define('SQLSRV_SQLTYPE_SMALLINT', 5);
define('SQLSRV_SQLTYPE_SMALLMONEY', 33559555);
define('SQLSRV_SQLTYPE_TIMESTAMP', 4606);
define('SQLSRV_SQLTYPE_TINYINT', -6);
define('SQLSRV_SQLTYPE_UDT', -151);
define('SQLSRV_SQLTYPE_UNIQUEIDENTIFIER', -11);
define('SQLSRV_SQLTYPE_XML', -152);
define('SQLSRV_SQLTYPE_DATE', 5211);
define('SQLSRV_SQLTYPE_TIME', 58728806);
define('SQLSRV_SQLTYPE_DATETIMEOFFSET', 58738021);
define('SQLSRV_SQLTYPE_DATETIME2', 58734173);
define('SQLSRV_PARAM_IN', 1);
define('SQLSRV_PARAM_INOUT', 2);
define('SQLSRV_PARAM_OUT', 4);
define('SQLSRV_TXN_READ_UNCOMMITTED', 1);
define('SQLSRV_TXN_READ_COMMITTED', 2);
define('SQLSRV_TXN_REPEATABLE_READ', 4);
define('SQLSRV_TXN_SERIALIZABLE', 8);
define('SQLSRV_TXN_SNAPSHOT', 32);
define('SQLSRV_SCROLL_NEXT', 1);
define('SQLSRV_SCROLL_PRIOR', 4);
define('SQLSRV_SCROLL_FIRST', 2);
define('SQLSRV_SCROLL_LAST', 3);
define('SQLSRV_SCROLL_ABSOLUTE', 5);
define('SQLSRV_SCROLL_RELATIVE', 6);
define('SQLSRV_CURSOR_FORWARD', 'forward');
define('SQLSRV_CURSOR_STATIC', 'static');
define('SQLSRV_CURSOR_DYNAMIC', 'dynamic');
define('SQLSRV_CURSOR_KEYSET', 'keyset');
define('SQLSRV_CURSOR_CLIENT_BUFFERED', 'buffered');
function sqlsrv_connect($server_name, $connection_info = array()){}
function sqlsrv_close($conn){}
function sqlsrv_commit($conn){}
function sqlsrv_begin_transaction($conn){}
function sqlsrv_rollback($conn){}
function sqlsrv_errors($errorsAndOrWarnings = SQLSRV_ERR_ALL){}
function sqlsrv_configure($setting, $value){}
function sqlsrv_get_config($setting){}
function sqlsrv_prepare($conn, $tsql, $params=array(), $options=array()){}
function sqlsrv_execute($stmt){}
function sqlsrv_query($conn, $tsql, $params=array(), $options=array()){}
function sqlsrv_fetch($stmt, $row=null, $offset=null){}
function sqlsrv_get_field($stmt, $field_index, $get_as_type){}
function sqlsrv_fetch_array($stmt, $fetch_type = null, $row=null, $offset=null){}
function sqlsrv_fetch_object($stmt, $class_name=null, $ctor_params=null, $row=null, $offset=null){}
function sqlsrv_has_rows($stmt){}
function sqlsrv_num_fields($stmt){}
function sqlsrv_next_result($stmt){}
function sqlsrv_num_rows($stmt){}
function sqlsrv_rows_affected($stmt){}
function sqlsrv_client_info($conn){}
function sqlsrv_server_info($conn){}
function sqlsrv_cancel($stmt){}
function sqlsrv_free_stmt($stmt){}
function sqlsrv_field_metadata($stmt){}
function sqlsrv_send_stream_data($stmt){}
function SQLSRV_PHPTYPE_STREAM($encoding){}
function SQLSRV_PHPTYPE_STRING($encoding){}
function SQLSRV_SQLTYPE_BINARY($byteCount){}
function SQLSRV_SQLTYPE_VARBINARY($byteCount){}
function SQLSRV_SQLTYPE_VARCHAR($charCount) {}
function SQLSRV_SQLTYPE_CHAR($charCount){}
function SQLSRV_SQLTYPE_NCHAR($charCount){}
function SQLSRV_SQLTYPE_NVARCHAR($charCount){}
function SQLSRV_SQLTYPE_DECIMAL($precision, $scale){}
function SQLSRV_SQLTYPE_NUMERIC($precision, $scale){}
