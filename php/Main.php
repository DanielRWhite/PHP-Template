<?php

namespace WEBSITE_NAMESPACE {
    
    include 'src/Interface/Interface.php';
    include   'src/Database/Database.php';
    include       'src/Config/Config.php';
    include        'src/Misc/Methods.php';

    class Main {

        private $userInterface;
        private       $Methods;
        private        $Config;

        function __construct() {
            
            $this -> userInterface = new UserInterface();
            $this ->       Methods = new       Methods();
            $this ->        Config = new        Config();
        }

        public function Main() {

            $this -> userInterface -> Initialize();
            $this ->        Config ->     Config();

        }

    }

}

?>