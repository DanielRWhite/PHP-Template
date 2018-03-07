<?php
namespace WEBSITE_NAMESPACE {

    class UserInterface {
        
        private    $windowHeight;
        private     $windowWidth;
        private $adblockDetected;
        private     $stylesheets;
        private         $scripts;
        private         $baseURL;
        private           $URLid;
        private         $htmlDir;
        private       $scriptDir;

        function __construct() {

            $this -> stylesheets        =                    Array( "/css/WEBSITE_NAMESPACE.css" );
            $this -> scripts            =                    Array(   "/js/WEBSITE_NAMESPACE.js" );
            $this -> windowHeight       =                                      Methods::urlArray();
            $this -> windowWidth        =                                Methods::getWindowWidth();
            $this -> adBlockDetected    =                               Methods::adBlockDetected();
            $this -> baseURL            =                                   Methods::urlArray()[0];
            $this -> URLid              =                                   Methods::urlArray()[1];
            $this -> htmlDir            =    $_SERVER['DOCUMENT_ROOT'] . "/php/site_contents/html";
            $this -> scriptDir          = $_SERVER['DOCUMENT_ROOT'] . "/php/site_contents/scripts";

        }

        public function Initialize() {

            Methods::iElement('html', 'start');
            $this -> GenerateHeaders();
            $this ->    GenerateBody();
            $this ->  GenerateFooter();
            Methods::iElement('html',   'end');

        }

        private function GenerateHeaders() {

            Methods::iElement('head',    'start');
            Methods::iElement('title',   'start'); print_r("WEBSITE_NAMESPACE"); Methods::iElement('title', 'end');
            foreach($this -> stylesheets as $item)            { print_r("<link rel='stylesheet' href='$item'>"); };
            foreach(    $this -> scripts as $item)            {        print_r("<script src='$item'></script>"); };
            Methods::iElement('head',      'end');

        }

        private function GenerateBody() { 

            Methods::iElement('body', 'start');
            switch($this -> baseURL) {
                default: Methods::execute_file($this -> htmlDir . "/INDEX/index.php"); break;
            }
            Methods::iElement('body',   'end');

        }

        private function GenerateFooter() {

            Methods::iElement('div class="footer"', 'start');
            
            Methods::iElement('div',                  'end');

        }

    }
}

?>