<?php
require_once "../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$methode = $request->getMethod();

$response = new Response();

$html = <<<HTML
<html>
<body>
    <h1>Requete</h1>
    La methode de la requete est <b>{$methode}</b>
</body>
</html>
HTML;

$response->setContent( $html );
$response->setStatusCode(Response::HTTP_OK);

// sets a HTTP response header
$response->headers->set('Content-Type', 'text/html');

// prints the HTTP headers followed by the content
$response->send();