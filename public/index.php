<?php

// Define the site namespace
namespace WEBSITE_NAMESPACE {

    // Start the session
    session_start();
    $_SESSION['php_root'] = $_SERVER['DOCUMENT_ROOT'] . "../";
    $_SESSION['html_root'] = $_SERVER['DOCUMENT_ROOT'];

    // Import the main file
    include '../php/Main.php';

    // Define the Index class
    class Index {
    
        // Define the main variables
        private             $main;
        private           $mobile;
        private   $enableWarnings;
        private   $enableExplicit;
        private  $enableRedirects;
        private $enableJavascript;
        private     $cacheEnabled;

        function __construct() {

            // Set the main variables
            $this -> main                = new Main();
            $this -> mobile              = $_SESSION['mobile_session'];
            $this -> enableWarnings      = $_SESSION['warnings'];
            $this -> enableExplicit      = $_SESSION['explicit'];
            $this -> enableRedirects     = $_SESSION['redirects'];
            $this -> enableJavascript    = $_SESSION['javascript'];
            $this -> cacheEnabled        = $_SESSION['cacheEnabled'];

            // Go to initalization;
            $this -> Initialize();

        }

        private function Initialize() {

            // Trigger the intialization method
            $this -> main -> Main();

        }

    }

    $index = new Index();

}

?>
