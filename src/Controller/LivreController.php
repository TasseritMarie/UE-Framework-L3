<?php
// src/Controller/Livre.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LivreController extends AbstractController
{
    public function numero($ref)
    {
         return $this->render(
             'livre/numero.html.php',
             array('articles' => $ref)
         );
    }
}