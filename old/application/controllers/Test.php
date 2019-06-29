<?php

    class Test extends CI_Controller {
        function __construct() {
            parent::__construct();
        }

        function index() {
            $this->load->view("crypto");
        }

        function indexnew() {
            $this->load->view("indexnew");
        }
        function hello() {
            echo "hello";
        }
    }

?>