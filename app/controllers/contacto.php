<?php

require_once('template.php');

class contacto{

    public function __construct()
    {

        $template = new template();
        $template->head('contacto');
        $template->nav('contacto');
        $template->header('contacto');
        $template->wellcome('contacto');
        $template->feet('contacto');

    }

}

?>