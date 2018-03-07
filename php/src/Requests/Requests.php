<?php
namespace WEBSITE_NAMESPACE {

    include 'scripts/Handle.php';

    class Requests {

        private $requestFound;
        private $requestArray;
        private   $RequestURL;
        private     $Handle;

        function             __construct() { 

            $this -> requestFound   =                    False;
            $this -> requestArray   =                    Array(
                "destroy_session"
            );
            $this ->   RequestURL   =   Methods::urlArray()[0];
            $this ->       Handle   =             new Handle();

        }

        public function         Requests() { }
        public function CheckForRequests() { 
            
            foreach($this -> requestArray as $request_uri) {
                if($request_uri == $this -> RequestURL) {
                    $this -> requestFound = True;
                }
            }

            return $this -> requestFound;
            
        }

        public function   handleRequests() {

            foreach($this -> requestArray as $request) {
                if($request == $this -> RequestURL) {
                    $this -> Handle -> $request();
                }
            }

         }

    }

}

?>