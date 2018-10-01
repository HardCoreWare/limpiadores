<?php

require_once('view.php');

class productos extends view{

    public function __construct(){

        $this->template('head','productos');
        $this->template('nav','productos');
        $this->template('header','productos');
        $this->template('feet','productos');

    }

}

?>