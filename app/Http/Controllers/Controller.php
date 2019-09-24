<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * @var store repository object
     */
    public $repository;


    public function callAction($method, $parameters)
    {
        unset($parameters['guard']);
        unset($parameters['trans']);

        return parent::callAction($method, $parameters);
    }
}
