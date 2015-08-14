<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CountRepeats.php";

  $app = new Silex\Application();

  $app['debug'] = true;

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

  $app->get("/", function() use ($app)  {
    return $app['twig']->render('home.html.twig');
  });

  $app->get('/result_page', function() use ($app) {

    $counter = new RepeatCounter;

    $result = $counter->countRepeats($_GET['input'], $_GET['input2']);

    return $app['twig']->render('result_page.html.twig', array('result' => $result));
  });

  return $app;
?>




