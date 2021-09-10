<?php

require('../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views/MalexHTML/App/dist/',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->get('/error', function() {
    return new Response('error');
})->bind("error"); // this is the route name

$app->get('/redirect', function() use ($app) {
    return $app->redirect($app["url_generator"]->generate("error"));
});
// // Error handling

// $app->error(function (\Exception $e, $code) { switch ($code) {
//     case 404:
//     $message = 'Page not found.';
//     break;
//     default:
//     $message = 'Something went terribly wrong.';
//   }
//   return $app['twig']->render('error.twig');
// });




$app->run();

?>
