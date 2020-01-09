<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhpErrorController
{
    /**
     * @Route("/php/{info}", name="app_php")
     */
    public function php($info)
    {

        $this->$info();

    }
}
