<?php


class view
{

    public function template($section,$params=[]){

        require_once('../app/views/templates/'.$section.'/template.php');

    }

}

?>