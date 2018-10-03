<?php

require_once('view.php');

require_once('../app/struct/struct.php');

class home extends view{

    public function __construct(){

        $struct = new struct('../app/struct/struct.json');

        $header_params = $struct->header();
        $wellcome_params = $struct->about();
        $services_params = $struct->services();
        $contact_params = $struct->contact();

        $this->template('head');
        $this->template('nav');

        $this->template('header',$header_params);
        $this->template('about',$wellcome_params);

        $this->template('services',$services_params);
        $this->template('products');
        
        $this->template('contact',$contact_params);
        $this->template('feet');

    }

}

?>