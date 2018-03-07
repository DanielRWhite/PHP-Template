<?php

namespace WEBSITE_NAMESPACE {

    class Config {

        private $DocumentRoot;
        private   $config_src;
        private   $configInit;

        function __construct() {

            $this -> DocumentRoot   =                               $_SESSION['php_root'];
            $this ->   config_src   = $this -> DocumentRoot . "src/Config/src/config.ini";

            switch($_SESSION['config']['ISSET']) {
                case True:  $this -> configInit =  True; break;
                case False: $this -> configInit = False; break;
                default:    $this -> configInit = False; break;
            }



        }

        public function Config() {

            if(!$this -> configInit) {
                $this -> InitializeConfig();
            }

        }

        public function InitializeConfig() {

            $_SESSION['config']          = parse_ini_file($this -> config_src);
            $_SESSION['config']['ISSET'] =                                True;

        }

    }

}

?>