<?php

require_once('view.php');

class quienes extends view{

    public function __construct(){

        $this->template('head','quienes');
        $this->template('nav','quienes');
        $this->template('header','quienes');
        $this->template('wellcome','quienes');
        $this->template('feet','quienes');

    }

}

?>