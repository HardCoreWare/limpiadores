<?php

require_once('view.php');

require_once('../app/struct/struct.php');

class home extends view{

    public function __construct(){

        $struct = new struct('../app/struct/struct.json');
        $header_params = $struct->header();
        $wellcome_params = $struct->about();


        $this->template('head');
        $this->template('nav');

        $this->template('header',$header_params);
        $this->template('wellcome',$wellcome_params);
        $this->template('services');
        $this->template('products');
        $this->template('contact');
        $this->template('feet');

    }

}

?>