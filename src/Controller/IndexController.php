<?php
/**
 * Created by PhpStorm.
 * User: Marcin
 * Date: 25.02.2018
 * Time: 23:02
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('main/index.hmtl.twig');
    }
}