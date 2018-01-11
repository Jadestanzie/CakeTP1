<?php

namespace App\Controller;
use App\Controller\AppController;

class ModulesController extends AppController
{
     public function index($module)
    {
         $this->set('monModule', $module);
    }
}


