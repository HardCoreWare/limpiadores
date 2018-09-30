<?php

require_once('template.php');

class quienes{

    public function __construct()
    {

        $template = new template();
        $template->head('quienes');
        $template->nav('quienes');
        $template->header('quienes');
        $template->wellcome('quienes');
        $template->feet('quienes');

    }

}

?>