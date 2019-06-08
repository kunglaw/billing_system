<?php

    class Test extends CI_Controller {
        function __construct() {

        }

        function index() {
            echo "test ";

            $jam = date('G', strtotime("2018-10-09 09:55:00 PM")); // lwbp
            echo $jam;
            $type = "lwbp";
            if( 17 < $jam && $jam < 22 ) { 
                $type = "wbp";
            }

            echo "<p> type => $type</p>";
        }
    }

?>