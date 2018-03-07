<?php
namespace WEBSITE_NAMESPACE {

    class UserInterface {

        private           $URLid;
        private         $htmlDir;
        private         $baseURL;
        private         $scripts;
        private       $scriptDir;
        private     $stylesheets;
        private    $DocumentRoot;
        private    $windowHeight;
        private $adblockDetected;        

        function __construct() {

            $this -> adBlockDetected    =                               Methods::adBlockDetected();
            $this -> DocumentRoot       =                                    $_SESSION['php_root'];
            $this -> windowHeight       =                                      Methods::urlArray();
            $this -> stylesheets        =                    Array( "/css/WEBSITE_NAMESPACE.css" );
            $this -> windowWidth        =                                Methods::getWindowWidth();
            $this -> scriptDir          =          $this -> DocumentRoot . "site_contents/scripts";
            $this -> scripts            =                    Array(   "/js/WEBSITE_NAMESPACE.js" );
            $this -> baseURL            =                             Methods::urlArray()[0] || "";
            $this -> htmlDir            =             $this -> DocumentRoot . "site_contents/html";

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