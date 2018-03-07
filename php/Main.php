<?php

namespace WEBSITE_NAMESPACE {
    
    include 'src/Interface/Interface.php';
    include   'src/Requests/Requests.php';
    include   'src/Database/Database.php';
    include       'src/Config/Config.php';
    include        'src/Misc/Methods.php';

    class Main {

        private $userInterface;
        private      $Requests;
        private       $Methods;
        private        $Config;

        function __construct() {
            
            $this -> userInterface = new UserInterface();
            $this ->      Requests = new      Requests();
            $this ->       Methods = new       Methods();
            $this ->        Config = new        Config();
        }

        public function Main() {

            if($this -> Requests -> CheckForRequests()) {
                $this -> Requests -> HandleRequests();
            } else {
                $this ->        Config ->     Config();
                $this -> userInterface -> Initialize();
            }

        }

    }

}

?>