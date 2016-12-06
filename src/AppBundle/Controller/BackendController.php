<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



class BackendController extends DefaultController
{
    /**
     * @Route("/admin/login", name="adminLogin")
     */
    public function indexAction(Request $request)
    {
        return $this->render('backend/adminLogin.html.twig');
    }
}
