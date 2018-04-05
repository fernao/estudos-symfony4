<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Carro;

class CarroController extends Controller
{
    /**
     * @Route("/carro", name="carro")
     */
    public function index()
    {
        return new Response(
            'Para inserir, acesse: /carro/{nome}/{modelo}<br/>' .
            '<a href="/carro/listar">listar</a>'
        );
    }

    /**
     * @Route("/carro/{nome}/{modelo}", name="carro_criar")
     */
    public function criar($nome, $modelo)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $carro = new Carro();
        $carro->setNome($nome);
        $carro->setModelo($modelo);

        $entityManager->persist($carro);
        $entityManager->flush();
        
        return new Response(
            $nome . '/' . $modelo . ' - inserido com id ' . $carro->getId()
        );
    }

    /**
     * @Route("/carro/listar", name="carro_listar")
     */
    public function listar()
    {
        $carros = $this->getDoctrine()
                ->getRepository(Carro::class)
                ->findAll();
        
        $output = '';
        
        foreach ($carros as $carro) {
            $output .= '<p>' . $carro->getNome() . '/' . $carro->getModelo() . '</p>';
        }
        
        return new Response($output);
    }
}
