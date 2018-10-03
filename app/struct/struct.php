<?php

class struct{
 
    private $struct;

    public function __construct($file){

        $this->begin($file);
        
    }

    public function begin($file){

        $json = file_get_contents($file);

        $this->struct=json_decode($json);

    }

    public function header(){

        return $this->struct->header;

    }

    public function about(){

        return $this->struct->about;

    }

    public function services(){

        return $this->struct->services;

    }

    public function contact(){

        return $this->struct->contact;

    }

}

?>