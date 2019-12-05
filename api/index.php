<?php

  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
  use Slim\Factory\AppFactory;

  require  $_SERVER["DOCUMENT_ROOT"]. '/vendor/autoload.php';

  $app = AppFactory::create();
  $app->setBasePath('/api');

  $app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
  });

  $app->run();