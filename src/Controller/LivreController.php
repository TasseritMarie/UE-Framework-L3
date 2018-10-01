<?php
// src/Controller/Livre.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LivreController
{
    public function numero()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Numéro du livre '.$number.'</body></html>'
        );
    }
}