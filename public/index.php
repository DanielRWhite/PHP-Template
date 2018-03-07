<?php

// Define the site namespace
namespace WEBSITE_NAMESPACE {

    // Start the session
    session_start();
    $_SESSION['php_root']   = substr($_SERVER['DOCUMENT_ROOT'], 0, -6) . "php/";
    $_SESSION['html_root']  =                         $_SERVER['DOCUMENT_ROOT'];

    // Import the main file
    include '../php/Main.php';

    // Define the Index class
    class Index {
    
        // Define the main variables
        private $enableJavascript;
        private  $enableRedirects;
        private   $enableWarnings;
        private     $cacheEnabled;
        private           $mobile;
        private             $main;

        function __construct() {

            // Set the main variables
            $this -> enableJavascript    =     $_SESSION['config']['JAVASCRIPT'];
            $this -> enableRedirects     =       $_SESSION['config']['REDIRECT'];
            $this -> enableWarnings      =       $_SESSION['config']['WARNINGS'];
            $this -> cacheEnabled        =  $_SESSION['config']['CACHE_ENABLED'];
            $this -> mobile              = $_SESSION['config']['MOBILE_SESSION'];
            $this -> main                =                            new Main();


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
