<?php
/**
 * Created by PhpStorm.
 * User: singh
 * Date: 30/04/2017
 * Time: 20:02
 */


namespace App\Front\Controllers;

use Core\Controllers\Controller;
use Core\Views\View;
use Core\Util\Helpers;

class CguController extends Controller
{
    public function indexAction($args)
    {
        $v = new View('cgu');
    }
}