<?php

require_once('template.php');

class home{

    public function __construct()
    {

        $template = new template();
        $template->head('home');
        $template->nav('home');
        $template->header('home');
        $template->wellcome('home');
        $template->feet('home');

    }

}

?>