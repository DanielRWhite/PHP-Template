<?php
namespace WEBSITE_NAMESPACE {

  class Methods {

    public function Methods() { }

    public function iElement($tag, $pos = "start") {

      switch($pos) {

        case 'start':
          print_r("<$tag>");      break;

        case 'end':
          print_r("</$tag>");     break;

        default:
          print_r("<$tag>");      break;

      }

    }

    public function urlArray() {

      return explode('/', ltrim($_SERVER['REQUEST_URI'], '/'), 15);

    }

    public function execute_file($code) {

      ob_start();
      print eval('?>'. file_get_contents($code));
      $output = ob_get_contents();

      ob_end_clean();
      print $output;

    }


    public function getWindowHeight() { }
    public function  getWindowWidth() { }
    public function adBlockDetected() { }

  }
}
?>
