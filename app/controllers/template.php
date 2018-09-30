<?php

class template{

  public function head($params){

    require_once('../app/views/templates/head/template.php');
    
  }

  public function nav($params){

    require_once('../app/views/templates/nav/template.php');

  }

  public function header($params){

    require_once('../app/views/templates/header/template.php');

  }

  public function wellcome($params){

    require_once('../app/views/templates/wellcome/template.php');

  }

  public function footer($params){

    require_once('../app/views/templates/footer/template.php');

  }

  public function feet($params){

    require_once('../app/views/templates/feet/template.php');

  }

}

?>