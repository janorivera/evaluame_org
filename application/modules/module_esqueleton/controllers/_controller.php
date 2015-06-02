<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class _controller extends MX_Controller
{

function __construct() {
parent::__construct();
}

function get($order_by) {
$this->load->model('_model');
$query = $this->_model->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('_model');
$query = $this->_model->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('_model');
$query = $this->_model->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('_model');
$query = $this->_model->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('_model');
$this->_model->_insert($data);
}

function _update($id, $data) {
$this->load->model('_model');
$this->_model->_update($id, $data);
}

function _delete($id) {
$this->load->model('_model');
$this->_model->_delete($id);
}

function count_where($column, $value) {
$this->load->model('_model');
$count = $this->_model->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('_model');
$max_id = $this->_model->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('_model');
$query = $this->_model->_custom_query($mysql_query);
return $query;
}

}