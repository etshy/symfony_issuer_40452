<?php
declare(strict_types=1);


namespace App\Controller;

use App\Form\IndexForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(IndexForm::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //make something
        } else {
            if ($request->getMethod() === "POST") {
                dd('error, method should be PATCH and form should be submitted');
            }
        }

        return $this->render('base.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}