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
        private   $enableExplicit;
        private     $cacheEnabled;
        private           $mobile;
        private             $main;

        function __construct() {

            // Set the main variables
            $this -> mobile              = $_SESSION['mobile_session'];
            $this -> cacheEnabled        =   $_SESSION['cacheEnabled'];
            $this -> enableJavascript    =     $_SESSION['javascript'];
            $this -> enableRedirects     =      $_SESSION['redirects'];
            $this -> enableWarnings      =       $_SESSION['warnings'];
            $this -> enableExplicit      =       $_SESSION['explicit'];
            $this -> main                =                  new Main();


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
