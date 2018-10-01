<?php
// src/Controller/Livre.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LivreController
{
    public function numero($ref)
    {
         return new Response(
            '<html><body>Numéro du livre '.$ref.'</body></html>'
        );
    }
}