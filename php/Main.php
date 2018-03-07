<?php

namespace WEBSITE_NAMESPACE {
    
    include_once 'src/Misc/Methods.php';
    include_once 'src/Config/Config.php';
    include_once 'src/Database/Database.php';
    include_once 'src/Interface/Interface.php';

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