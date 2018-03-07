<?php

namespace NAMESPACE_WEBSITE {

    class Config {

        private $config_src;
        private $configInit;

        function __construct() {

            if(!$_SESSION['custom_config']['bool']) {
                $this -> $config_src = "src/config.ini";
            } else {
                $this -> $config_src = $_SESSION['custom_config']['src'];
            }

            if($_SESSION['config']['is_set']) {
                $this -> $configInit = True;
            } else {
                $this -> $configInit = False;
            }

        }

        public function Config() {

            if(!$configInit) {
                $this -> InitializeConfig();
            }

        }

        public function InitializeConfig() {



        }

    }
}

?>