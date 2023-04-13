<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(SessionInterface $session): Response
    {    $username = " ";
         $userid = 0;
         $msg="you need to login first";
        $user = $session->get('user');

        if ($user) {
            $username = $user->getUsername();
            $userid = $user->getIdUser();
            $msg="you are logged in as :";
        }
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'username' => $username,
            'userid' => $userid,
            'msg' => $msg,
        ]);
    }
    /**
     * @Route("/home", name="home", methods={"GET"})
     */
    public function home(): Response
    {
        return $this->render('front/index.html.twig');
    }
    /**
     * @Route("/blog", name="blog", methods={"GET"})
     */
    public function blog(): Response
    {
        return $this->render('front/blog.html.twig');
    }
    /**
     * @Route("/single_blog", name="single_blog", methods={"GET"})
     */
    public function single_blog(): Response
    {
        return $this->render('front/single_blog.html.twig');
    }
    /**
     * @Route("/event", name="event", methods={"GET"})
     */
    public function event(): Response
    {
        return $this->render('front/event.html.twig');
    }
    /**
     * @Route("/single_event", name="single_event", methods={"GET"})
     */
    public function single_event(): Response
    {
        return $this->render('front/single_event.html.twig');
    }
    /**
     * @Route("/shop", name="shop", methods={"GET"})
     */
    public function shop(): Response
    {
        return $this->render('front/shop.html.twig');
    }
    /**
     * @Route("/single_product", name="single_product", methods={"GET"})
     */
    public function single_product(): Response
    {
        return $this->render('front/single_product.html.twig');
    }
    /**
     * @Route("/cart", name="cart", methods={"GET"})
     */
    public function cart(): Response
    {
        return $this->render('front/cart.html.twig');
    }
    /**
     * @Route("/checkout", name="checkout", methods={"GET"})
     */
    public function checkout(): Response
    {
        return $this->render('front/checkout.html.twig');
    }
    /**
     * @Route("/404", name="404", methods={"GET"})
     */
    public function f404(): Response
    {
        return $this->render('front/404.html.twig');
    }
    /**
     * @Route("/SignInSignUp", name="SignInSignUp", methods={"GET"})
     */
    public function SignInSignUp(): Response
    {
        return $this->render('front/SignInSignUp.html.twig');
    }

}
