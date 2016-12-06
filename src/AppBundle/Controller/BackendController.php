<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
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

    /**
     * @Route("admin/dashboard/movie/add", name="adminMovieAdd")
     */

    public function movieAddAction(Request $request)
    {

        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);
        if ($form->isSubmitted() & $form->isValid()) {
            $movie->setDateTime(new \DateTime());
            $this->insert($movie);

            return $this->redirectToRoute('adminDashboard');
        }
        return $this->render('backend/movieAdd.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    /**
     * @Route("admin/dashboard/movie/list", name="adminMovieList")
     */

    public function movieListAction(Request $request)
    {
        $name = $request->get('name');
        $year = $request->get('year');

        $movies = $this->getRepository('Movie')->searchMovies($name,$year);

        return $this->render('backend/movieList.html.twig',array(
            'movies'=>$movies
        ));
    }


}
