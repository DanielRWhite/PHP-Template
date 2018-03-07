<?php

namespace WEBSITE_NAMESPACE {
    
    
    include 'src/Misc/Methods.php';
    include 'src/Config/Config.php';
    include 'src/Database/Database.php';
    include 'src/Interface/Interface.php';

    class Main {

        private $userInterface;
        private       $Methods;

        function __construct() {

            $this ->           Methods      = new       Methods();
            $this ->     userInterface      = new UserInterface();

        }

        public function Main() {

            $this -> userInterface -> Initialize();

        }

    }

}

?>