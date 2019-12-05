<?php

  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
  use Slim\Factory\AppFactory;

  require  $_SERVER["DOCUMENT_ROOT"]. '/vendor/composer/vendor/autoload.php';
  require $_SERVER["DOCUMENT_ROOT"]. '/dao/autoload.php';

  $app = AppFactory::create();
  $app->setBasePath('/api');

  $app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
  });
  $app->get('/clients/{cc}', function (Request $request, Response $response, $args){
      $clienteDao = new ClienteDao();
      $cliente = $clienteDao->findByCC($args['cc']);
      $response->getBody()->write(json_encode($cliente));
      return $response->withHeader('Content-Type','application/json');
  });
  $app->get('/products',function (Request $request, Response $response, $args){
    session_start();
    if(isset($_SESSION["empleado"])){
    $empleado = unserialize($_SESSION['empleado']);
      $productDao = new ProductoDao();
      $products = $productDao->findByFranquicia($empleado->getIdFranquicia());
      $response->getBody()->write(json_encode($products));
      return $response->withHeader('Content-Type','application/json');
    }else{
      return $response->withStatus(401);
    }

  });
  $app->run();