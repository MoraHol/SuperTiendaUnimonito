<?php

  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
  use Karriere\JsonDecoder\JsonDecoder as JsonDecoder;
  use Slim\Factory\AppFactory;

  require $_SERVER["DOCUMENT_ROOT"] . '/vendor/composer/vendor/autoload.php';
  require $_SERVER["DOCUMENT_ROOT"] . '/dao/autoload.php';

  $app = AppFactory::create();
  $app->setBasePath('/api');

  $app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
  });
  $app->get('/clients/{cc}', function (Request $request, Response $response, $args) {
    $clienteDao = new ClienteDao();
    $cliente = $clienteDao->findByCC($args['cc']);
    $response->getBody()->write(json_encode($cliente));
    return $response->withHeader('Content-Type', 'application/json');
  });
  $app->get('/products', function (Request $request, Response $response, $args) {
    session_start();
    if (isset($_SESSION["empleado"])) {
      $empleado = unserialize($_SESSION['empleado']);
      $productDao = new ProductoDao();
      $products = $productDao->findByFranquicia($empleado->getIdFranquicia());
      $response->getBody()->write(json_encode($products));
      return $response->withHeader('Content-Type', 'application/json');
    } else {
      return $response->withStatus(401);
    }
  });
  $app->post('/sells/new/', function (Request $request, Response $response, $args) {
    session_start();
    $empleado = unserialize($_SESSION['empleado']);
    $jsonDecoder = new JsonDecoder();
    $productDao = new ProductoDao();
    $compraDao = new CompraDao();
    $post = $request->getParsedBody();
    $products = json_decode($post["products"]);
    $client = $post["client"];
    $compra = new CompraVo();

    $productsArr = [];
    foreach ($products as $product) {
      array_push($productsArr, $productDao->findById($product->id));
    }
    $monto = 0;
    foreach ($productsArr as $productArr) {
      $monto += $productArr->getPrecio();
    }
    $compra->setProductosComprados($products);
    $compra->setMonto($monto);
    $compra->setCliente($jsonDecoder->decode($client, ClienteVO::class));
    $compra->setDescuento(0);
    $compra->idFranquicia = $empleado->getIdfranquicia()->getId();
    $compra->idVendedor = $empleado->getId();
    if($compraDao->save($compra) > 0){
      return $response->withStatus(201);
    }else{
      return $response->withStatus(500);
    }
  });
  $app->run();