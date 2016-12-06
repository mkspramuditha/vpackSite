<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends DefaultController
{
    /**
     * @Route("/", name="indexPage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('site/index.html.twig');
    }
}
