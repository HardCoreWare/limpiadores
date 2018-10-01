<?php

require_once('view.php');

class servicios extends view{

    public function __construct(){

        $this->template('head','servicios');
        $this->template('nav','servicios');
        $this->template('header','servicios');
        $this->template('feet','servicios');

    }

}

?>