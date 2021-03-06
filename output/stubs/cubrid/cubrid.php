<?php
function cubrid_connect ($host, $port, $dbname, $userid = 'PUBLIC', $passwd = '', $new_link = FALSE) {}
function cubrid_connect_with_url ($conn_url, $userid = 'PUBLIC', $passwd = '', $new_link = FALSE) {}
function cubrid_pconnect ($host, $port, $dbname, $userid = 'PUBLIC', $passwd = '') {}
function cubrid_pconnect_with_url ($conn_url, $userid = 'PUBLIC', $passwd = '') {}
function cubrid_close ($conn_identifier = null) {}
function cubrid_disconnect ($conn_identifier = null) {}
function cubrid_query ($query, $conn_identifier = null) {}
function cubrid_execute ($conn_identifier, $sql, $option = null) {}
function cubrid_execute ($request_identifier, $option = null) {}
function cubrid_bind ($req_identifier, $bind_index, $bind_value, $bind_value_type = null) {}
function cubrid_close_prepare ($req_identifier) {}
function cubrid_close_request ($req_identifier) {}
function cubrid_col_get ($conn_identifier, $oid, $attr_name) {}
function cubrid_col_size ($conn_identifier, $oid, $attr_name) {}
function cubrid_unbuffered_query ($query, $conn_identifier = null) {}
function cubrid_list_dbs ($conn_identifier) {}
function cubrid_error ($connection = null) {}
function cubrid_error_msg () {}
function cubrid_errno ($conn_identifier = null) {}
function cubrid_error_code () {}
function cubrid_affected_rows ($conn_identifier = null) {}
function cubrid_insert_id ($conn_identifier = null) {}
function cubrid_result ($result, $row, $field = 0) {}
function cubrid_num_rows ($result) {}
function cubrid_num_cols ($result) {}
function cubrid_num_fields ($result) {}
function cubrid_fetch ($result, $type = CUBRID_BOTH) {}
function cubrid_fetch_row ($result, $type = null) {}
function cubrid_fetch_array ($result, $type = CUBRID_BOTH) {}
function cubrid_fetch_assoc ($result, $type = null) {}
function cubrid_fetch_object ($result, $class_name = null, $params = null, $type = null) {}
function cubrid_data_seek ($result, $row_number) {}
function cubrid_fetch_lengths ($result) {}
function cubrid_fetch_field ($result, $field_offset = 0) {}
function cubrid_column_names ($req_identifier) {}
function cubrid_column_types ($req_identifier) {}
function cubrid_field_seek ($result, $field_offset) {}
function cubrid_free_result ($req_identifier) {}
function cubrid_field_name ($result, $field_offset) {}
function cubrid_field_table ($result, $field_offset) {}
function cubrid_field_len ($result, $field_offset) {}
function cubrid_field_type ($result, $field_offset) {}
function cubrid_field_flags ($result, $field_offset) {}
function cubrid_real_escape_string ($unescaped_string, $conn_identifier = null) {}
function cubrid_client_encoding ($conn_identifier = null) {}
function cubrid_ping ($conn_identifier = null) {}
function cubrid_get_client_info () {}
function cubrid_get_server_info ($conn_identifier) {}
function cubrid_get_db_parameter ($conn_identifier) {}
function cubrid_get_autocommit ($conn_identifier) {}
function cubrid_get_charset ($conn_identifier) {}
function cubrid_set_autocommit ($conn_identifier, $mode) {}
function cubrid_db_name ($result, $index) {}
function cubrid_db_parameter ($conn_identifier) {}
function cubrid_set_db_parameter ($conn_identifier, $param_type, $param_value) {}
function cubrid_get_query_timeout ($req_identifier) {}
function cubrid_set_query_timeout ($req_identifier, $timeout) {}
function cubrid_get_class_name ($conn_identifier, $oid) {}
function cubrid_get ($conn_identifier, $oid, $attr = null) {}
function cubrid_is_instance ($conn_identifier, $oid) {}
function cubrid_commit ($conn_identifier) {}
function cubrid_rollback ($conn_identifier) {}
function cubrid_current_oid ($req_identifier) {}
function cubrid_drop ($conn_identifier, $oid) {}
function cubrid_error_code_facility () {}
function cubrid_lob_close ($lob_identifier_array) {}
function cubrid_lob_export ($conn_identifier, $lob_identifier, $path_name) {}
function cubrid_lob_get ($conn_identifier, $sql) {}
function cubrid_lob_send ($conn_identifier, $lob_identifier) {}
function cubrid_lob_size ($lob_identifier) {}
function cubrid_lob2_bind ($req_identifier, $bind_index, $bind_value, $bind_value_type = NULL) {}
function cubrid_lob2_close ($lob_identifier) {}
function cubrid_lob2_export ($lob_identifier, $file_name) {}
function cubrid_lob2_import ($lob_identifier, $file_name) {}
function cubrid_lob2_new ($conn_identifier = NULL, $type = "BLOB") {}
function cubrid_lob2_read ($lob_identifier, $len) {}
function cubrid_lob2_seek64 ($lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT) {}
function cubrid_lob2_seek ($lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT) {}
function cubrid_lob2_size64 ($lob_identifier) {}
function cubrid_lob2_size ($lob_identifier) {}
function cubrid_lob2_tell64 ($lob_identifier) {}
function cubrid_lob2_tell ($lob_identifier) {}
function cubrid_lock_read ($conn_identifier, $oid) {}
function cubrid_lock_write ($conn_identifier, $oid) {}
function cubrid_move_cursor ($req_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT) {}
function cubrid_next_result ($result) {}
function cubrid_prepare ($conn_identifier, $prepare_stmt, $option = 0) {}
function cubrid_put ($conn_identifier, $oid, $attr = null, $value) {}
function cubrid_schema ($conn_identifier, $schema_type, $class_name = null, $attr_name = null) {}
function cubrid_seq_drop ($conn_identifier, $oid, $attr_name, $index) {}
function cubrid_seq_insert ($conn_identifier, $oid, $attr_name, $index, $seq_element) {}
function cubrid_seq_put ($conn_identifier, $oid, $attr_name, $index, $seq_element) {}
function cubrid_seq_add ($conn_identifier, $oid, $attr_name, $seq_element) {}
function cubrid_set_add ($conn_identifier, $oid, $attr_name, $set_element) {}
function cubrid_set_drop ($conn_identifier, $oid, $attr_name, $set_element) {}
function cubrid_version () {}
define ('CUBRID_NUM', 1);
define ('CUBRID_ASSOC', 2);
define ('CUBRID_BOTH', 3);
define ('CUBRID_OBJECT', 4);
define ('CUBRID_INCLUDE_OID', 1);
define ('CUBRID_ASYNC', 2);
define ('CUBRID_EXEC_QUERY_ALL', 4);
define ('CUBRID_CURSOR_SUCCESS', 1);
define ('CUBRID_NO_MORE_DATA', 0);
define ('CUBRID_CURSOR_ERROR', -1);
define ('CUBRID_AUTOCOMMIT_TRUE', 1);
define ('CUBRID_AUTOCOMMIT_FALSE', 0);
define ('CUBRID_CURSOR_FIRST', 0);
define ('CUBRID_CURSOR_CURRENT', 1);
define ('CUBRID_CURSOR_LAST', 2);
?>
