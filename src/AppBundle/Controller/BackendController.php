<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



class BackendController extends DefaultController
{
    /**
     * @Route("/admin/login", name="adminLogin")
     */
    public function loginAction(Request $request)
    {

        $auth_checker = $this->get('security.authorization_checker');


        $token = $this->get('security.token_storage')->getToken();

        $user = $token->getUser();



        $isRoleAdmin = $auth_checker->isGranted('ROLE_ADMIN');
        if($isRoleAdmin)
        {
            return $this->redirect(
                $this->generateUrl("adminDashboard")
            );
        }


        $authenticationUtils = $this->get('security.authentication_utils');

        $error =$authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUserName();
        return $this->render('backend/adminLogin.html.twig',array(
            'last_username' =>$lastUsername,
            'error'=>$error
        ));

    }

    /**
     * @Route("/admin/dashboard", name="adminDashboard")
     */
    public function dashboardAction(Request $request)
    {
        var_dump('dashboard');
        exit;
    }

}
