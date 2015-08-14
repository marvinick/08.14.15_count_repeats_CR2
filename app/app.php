<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CounterRepeats.php";

  session_start();

  $app = new Silex\Application();

  $app['debug'] = true;

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

  $app->get("/", function() use ($app)  {
    return $app['twig']->render('front_page.html.twig');
  });

  $app->post('/result', function() use ($app) {

    $real_RockPaperScissors = new RockPaperScissors;

    $result = $real_RockPaperScissors->makeRockPaperScissors($_POST['player1'], $_POST['player2']);
    return $app['twig']->render('result_page.html.twig') $result;

  });

  return $app;
?>