<?php 

    class Home extends CI_Controller {

        function __construct() {
            parent::__construct();
        }

        function index() {
            echo ENVIRONMENT;
            echo "<hr>";
            echo getenv("DB_USER");
        }
    }