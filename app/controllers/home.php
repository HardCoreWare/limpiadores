<?php

require_once('view.php');

class home extends view{

    public function __construct(){

        $this->template('head');
        $this->template('nav');
        /*
        $header_params=['title'=>'EMPRESA','sub'=>'slogan de la empresa','img'=>'img/auto8.png'];
        $this->template('header',$header_params);
        $wellcome_params=['title'=>'bienvenido','sub'=>'mensaje de apertura'];
        $this->template('wellcome',$wellcome_params);
        $this->template('services');
        $this->template('products');*/
        $this->template('contact');
        $this->template('feet');

    }

}

?>