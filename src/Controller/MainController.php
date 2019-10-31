<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/books", name="books")
     *
     * @return Response
     */
    public function books()
    {
        $response = new Response(json_encode([]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}