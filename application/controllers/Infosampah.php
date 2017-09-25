<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');
class Infosampah extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }

    public function index(){
    	$this->homepage();
    }

    function homepage(){
    	$this->load->view('infosampah/index.php');
    }
}
?>