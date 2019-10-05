<?php 
    require_once "controllers/template.php";
    require_once "controllers/enlaces.php";
    require_once "models/enlaces.php";
    require_once "controllers/ingreso.php";
    require_once "models/ingreso.php";
    
    
    $template = new templateController();
    $template->template();