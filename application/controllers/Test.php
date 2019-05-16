<?php

    class Test extends CI_Controller {
        function __construct() {

        }

        function index() {
            echo "test ";

            $jam = date('H', strtotime("2018-10-09 17:55:00")); // lwbp
            echo $jam;
            $type = "lwbp";
            if( 17 < $jam && $jam < 22 ) { 
                $type = "wbp";
            }

            echo "<p> type => $type</p>";
        }
    }

?>