<?php
class PDOException extends RuntimeException  {
	public $errorInfo;
}
class PDO  {
	const PARAM_BOOL = 5;
	const PARAM_NULL = 0;
	const PARAM_INT = 1;
	const PARAM_STR = 2;
	const PARAM_LOB = 3;
	const PARAM_STMT = 4;
	const PARAM_INPUT_OUTPUT = 2147483648;
	const PARAM_EVT_ALLOC = 0;
	const PARAM_EVT_FREE = 1;
	const PARAM_EVT_EXEC_PRE = 2;
	const PARAM_EVT_EXEC_POST = 3;
	const PARAM_EVT_FETCH_PRE = 4;
	const PARAM_EVT_FETCH_POST = 5;
	const PARAM_EVT_NORMALIZE = 6;
	const FETCH_LAZY = 1;
	const FETCH_ASSOC = 2;
	const FETCH_NUM = 3;
	const FETCH_BOTH = 4;
	const FETCH_OBJ = 5;
	const FETCH_BOUND = 6;
	const FETCH_COLUMN = 7;
	const FETCH_CLASS = 8;
	const FETCH_INTO = 9;
	const FETCH_FUNC = 10;
	const FETCH_GROUP = 65536;
	const FETCH_UNIQUE = 196608;
	const FETCH_KEY_PAIR = 12;
	const FETCH_CLASSTYPE = 262144;
	const FETCH_SERIALIZE = 524288;
	const FETCH_PROPS_LATE = 1048576;
	const FETCH_NAMED = 11;
	const ATTR_AUTOCOMMIT = 0;
	const ATTR_PREFETCH = 1;
	const ATTR_TIMEOUT = 2;
	const ATTR_ERRMODE = 3;
	const ATTR_SERVER_VERSION = 4;
	const ATTR_CLIENT_VERSION = 5;
	const ATTR_SERVER_INFO = 6;
	const ATTR_CONNECTION_STATUS = 7;
	const ATTR_CASE = 8;
	const ATTR_CURSOR_NAME = 9;
	const ATTR_CURSOR = 10;
	const ATTR_ORACLE_NULLS = 11;
	const ATTR_PERSISTENT = 12;
	const ATTR_STATEMENT_CLASS = 13;
	const ATTR_FETCH_TABLE_NAMES = 14;
	const ATTR_FETCH_CATALOG_NAMES = 15;
	const ATTR_DRIVER_NAME = 16;
	const ATTR_STRINGIFY_FETCHES = 17;
	const ATTR_MAX_COLUMN_LEN = 18;
	const ATTR_EMULATE_PREPARES = 20;
	const ATTR_DEFAULT_FETCH_MODE = 19;
	const ERRMODE_SILENT = 0;
	const ERRMODE_WARNING = 1;
	const ERRMODE_EXCEPTION = 2;
	const CASE_NATURAL = 0;
	const CASE_LOWER = 2;
	const CASE_UPPER = 1;
	const NULL_NATURAL = 0;
	const NULL_EMPTY_STRING = 1;
	const NULL_TO_STRING = 2;
	const ERR_NONE = 00000;
	const FETCH_ORI_NEXT = 0;
	const FETCH_ORI_PRIOR = 1;
	const FETCH_ORI_FIRST = 2;
	const FETCH_ORI_LAST = 3;
	const FETCH_ORI_ABS = 4;
	const FETCH_ORI_REL = 5;
	const CURSOR_FWDONLY = 0;
	const CURSOR_SCROLL = 1;
	const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;
	const MYSQL_ATTR_LOCAL_INFILE = 1001;
	const MYSQL_ATTR_INIT_COMMAND = 1002;
	const MYSQL_ATTR_MAX_BUFFER_SIZE = 1005;
	const MYSQL_ATTR_READ_DEFAULT_FILE = 1003;
	const MYSQL_ATTR_READ_DEFAULT_GROUP = 1004;
	const MYSQL_ATTR_COMPRESS = 1006;
	const MYSQL_ATTR_DIRECT_QUERY = 1007;
	const MYSQL_ATTR_FOUND_ROWS = 1008;
	const MYSQL_ATTR_IGNORE_SPACE = 1009;
	const MYSQL_ATTR_SSL_KEY = 1010;
	const MYSQL_ATTR_SSL_CERT = 1011;
	const MYSQL_ATTR_SSL_CA = 1012;
	const MYSQL_ATTR_SSL_CAPATH = 1013;
	const MYSQL_ATTR_SSL_CIPHER = 1014;
	
	const MYSQL_ATTR_MULTI_STATEMENTS = 1015;
	
	const PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT = 1000;
	const PGSQL_TRANSACTION_IDLE = 0;
	const PGSQL_TRANSACTION_ACTIVE = 1;
	const PGSQL_TRANSACTION_INTRANS = 2;
	const PGSQL_TRANSACTION_INERROR = 3;
	const PGSQL_TRANSACTION_UNKNOWN = 4;
    const PGSQL_CONNECT_ASYNC = 4;
    const PGSQL_CONNECTION_AUTH_OK = 5;
    const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;
    const PGSQL_CONNECTION_MADE = 3;
    const PGSQL_CONNECTION_SETENV = 6;
    const PGSQL_CONNECTION_SSL_STARTUP = 7;
    const PGSQL_CONNECTION_STARTED = 2;
    const PGSQL_DML_ESCAPE = 4096;
    const PGSQL_POLLING_ACTIVE = 4;
    const PGSQL_POLLING_FAILED = 0;
    const PGSQL_POLLING_OK = 3;
    const PGSQL_POLLING_READING = 1;
    const PGSQL_POLLING_WRITING = 2;
	const SQLSRV_TXN_READ_UNCOMMITTED = "READ_UNCOMMITTED";
    const SQLSRV_TXN_READ_COMMITTED = "READ_COMMITTED";
	const SQLSRV_TXN_REPEATABLE_READ = "REPEATABLE_READ";
	const SQLSRV_TXN_SNAPSHOT = "SNAPSHOT";
    const SQLSRV_TXN_SERIALIZABLE = "SERIALIZABLE";
	const SQLSRV_ENCODING_BINARY = 2;
    const SQLSRV_ENCODING_SYSTEM = 3;
	const SQLSRV_ENCODING_UTF8 = 65001;
	const SQLSRV_ENCODING_DEFAULT = 1;
	const SQLSRV_ATTR_QUERY_TIMEOUT = 1001;
	const SQLSRV_ATTR_DIRECT_QUERY = 1002;
	public function __construct ($dsn, $username, $passwd, $options) {}
    public function prepare ($statement, array $driver_options = array()) {}
	public function beginTransaction () {}
	public function commit () {}
	public function rollBack () {}
	public function inTransaction () {}
	public function setAttribute ($attribute, $value) {}
	public function exec ($statement) {}
	public function query ($statement, $mode = PDO::ATTR_DEFAULT_FETCH_MODE, $arg3 = null, array $ctorargs = array()) {}
	public function lastInsertId ($name = null) {}
	public function errorCode () {}
	public function errorInfo () {}
	public function getAttribute ($attribute) {}
	public function quote ($string, $parameter_type = PDO::PARAM_STR) {}
	final public function __wakeup () {}
	final public function __sleep () {}
	public static function getAvailableDrivers () {}
}
class PDOStatement implements Traversable {
	public $queryString;
	public function execute ($input_parameters = null) {}
	public function fetch ($fetch_style = null, $cursor_orientation = PDO::FETCH_ORI_NEXT, $cursor_offset = 0) {}
	public function bindParam ($parameter, &$variable, $data_type = PDO::PARAM_STR, $length = null, $driver_options = null) {}
	public function bindColumn ($column, &$param, $type = null, $maxlen = null, $driverdata = null) {}
	public function bindValue ($parameter, $value, $data_type = PDO::PARAM_STR) {}
	public function rowCount () {}
	public function fetchColumn ($column_number = 0) {}
	public function fetchAll ($fetch_style = null, $fetch_argument = null, array $ctor_args = array()) {}
	public function fetchObject ($class_name = "stdClass", array $ctor_args = array()) {}
	public function errorCode () {}
	public function errorInfo () {}
	public function setAttribute ($attribute, $value) {}
	public function getAttribute ($attribute) {}
	public function columnCount () {}
	public function getColumnMeta ($column) {}
	public function setFetchMode ($mode) {}
	public function nextRowset () {}
	public function closeCursor () {}
	public function debugDumpParams () {}
	final public function __wakeup () {}
	final public function __sleep () {}
}
final class PDORow  {
}
function pdo_drivers () {}
?>
