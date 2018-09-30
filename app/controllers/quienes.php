<?php

require_once('view.php');

class quienes extends view{

    public function __construct(){

        $this->template('head','home');
        $this->template('nav','home');
        $this->template('header','home');
        $this->template('wellcome','home');
        $this->template('feet','home');

    }

}

?>