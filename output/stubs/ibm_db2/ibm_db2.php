<?php
function db2_connect ($database, $username, $password, array $options = null) {}
function db2_commit ($connection) {}
function db2_pconnect ($database, $username, $password, array $options = null) {}
function db2_autocommit ($connection, $value = null) {}
function db2_bind_param ($stmt, $parameter_number, $variable_name, $parameter_type = null, $data_type = null, $precision = null, $scale = null) {}
function db2_close ($connection) {}
function db2_column_privileges ($connection, $qualifier = null, $schema = null, $table_name = null, $column_name = null) {}
function db2_columnprivileges () {}
function db2_columns ($connection, $qualifier = null, $schema = null, $table_name = null, $column_name = null) {}
function db2_foreign_keys ($connection, $qualifier, $schema, $table_name) {}
function db2_foreignkeys () {}
function db2_primary_keys ($connection, $qualifier, $schema, $table_name) {}
function db2_primarykeys () {}
function db2_procedure_columns ($connection, $qualifier, $schema, $procedure, $parameter) {}
function db2_procedurecolumns () {}
function db2_procedures ($connection, $qualifier, $schema, $procedure) {}
function db2_special_columns ($connection, $qualifier, $schema, $table_name, $scope) {}
function db2_specialcolumns () {}
function db2_statistics ($connection, $qualifier, $schema, $table_name, $unique) {}
function db2_table_privileges ($connection, $qualifier = null, $schema = null, $table_name = null) {}
function db2_tableprivileges () {}
function db2_tables ($connection, $qualifier = null, $schema = null, $table_name = null, $table_type = null) {}
function db2_exec ($connection, $statement, array $options = null) {}
function db2_prepare ($connection, $statement, array $options = null) {}
function db2_execute ($stmt, array $parameters = null) {}
function db2_stmt_errormsg ($stmt = null) {}
function db2_conn_errormsg ($connection = null) {}
function db2_conn_error ($connection = null) {}
function db2_stmt_error ($stmt = null) {}
function db2_next_result ($stmt) {}
function db2_num_fields ($stmt) {}
function db2_num_rows ($stmt) {}
function db2_field_name ($stmt, $column) {}
function db2_field_display_size ($stmt, $column) {}
function db2_field_num ($stmt, $column) {}
function db2_field_precision ($stmt, $column) {}
function db2_field_scale ($stmt, $column) {}
function db2_field_type ($stmt, $column) {}
function db2_field_width ($stmt, $column) {}
function db2_cursor_type ($stmt) {}
function db2_rollback ($connection) {}
function db2_free_stmt ($stmt) {}
function db2_result ($stmt, $column) {}
function db2_fetch_row ($stmt, $row_number = null) {}
function db2_fetch_assoc ($stmt, $row_number = null) {}
function db2_fetch_array ($stmt, $row_number = null) {}
function db2_fetch_both ($stmt, $row_number = null) {}
function db2_free_result ($stmt) {}
function db2_set_option ($resource, array $options, $type) {}
function db2_setoption () {}
function db2_fetch_object ($stmt, $row_number = null) {}
function db2_server_info ($connection) {}
function db2_client_info ($connection) {}
function db2_escape_string ($string_literal) {}
function db2_lob_read ($stmt, $colnum, $length) {}
function db2_get_option ($resource, $option) {}
function db2_last_insert_id ($resource) {}
define ('DB2_BINARY', 1);
define ('DB2_CONVERT', 2);
define ('DB2_PASSTHRU', 3);
define ('DB2_SCROLLABLE', 1);
define ('DB2_FORWARD_ONLY', 0);
define ('DB2_PARAM_IN', 1);
define ('DB2_PARAM_OUT', 4);
define ('DB2_PARAM_INOUT', 2);
define ('DB2_PARAM_FILE', 11);
define ('DB2_AUTOCOMMIT_ON', 1);
define ('DB2_AUTOCOMMIT_OFF', 0);
define ('DB2_DEFERRED_PREPARE_ON', 1);
define ('DB2_DEFERRED_PREPARE_OFF', 0);
define ('DB2_DOUBLE', 8);
define ('DB2_LONG', 4);
define ('DB2_CHAR', 1);
define ('DB2_XML', -370);
define ('DB2_CASE_NATURAL', 0);
define ('DB2_CASE_LOWER', 1);
define ('DB2_CASE_UPPER', 2);
?>
