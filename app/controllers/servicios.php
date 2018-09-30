<?php

require_once('template.php');

class servicios{

    public function __construct()
    {

        $template = new template();
        $template->head('servicios');
        $template->nav('servicios');
        $template->header('servicios');
        $template->wellcome('servicios');
        $template->feet('servicios');

    }

}

?>