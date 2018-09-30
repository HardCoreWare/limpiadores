<?php

require_once('template.php');

class productos{

    public function __construct()
    {

        $template = new template();
        $template->head('productos');
        $template->nav('productos');
        $template->header('productos');
        $template->wellcome('productos');
        $template->feet('productos');

    }

}

?>