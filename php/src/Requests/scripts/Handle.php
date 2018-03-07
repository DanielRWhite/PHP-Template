<?php
namespace WEBSITE_NAMESPACE {

    class Handle {

        private $vars;

        function            __construct() {
            
            $this -> vars   =   array_keys(get_defined_vars());

        }

        public function        Handling() { }

        public function destroy_session() {
            
            for($i = 0; $i < sizeOf($this -> vars); $i++) {
                unset($this -> vars[$i]);
            }
            unset($this -> vars, $i);
            session_destroy();
            header('Location: /');
        }
        
    }
}
?>