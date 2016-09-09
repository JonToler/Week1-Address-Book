<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    $app = new Silex\Application();

    session_start();
    if (empty($_SESSION['contacts'])) {
        $_SESSION['contacts'] = array();
    }

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app){
      // return 'test';
      return $app['twig']->render('inventory.html.twig', array('contacts' => $_SESSION['contacts']));
    });

    $app->post('/postcontact', function() use ($app) {
        $name = $_POST['name'];
        $StreetAddress = $_POST['StreetAddress'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $EmailAddress = $_POST['EmailAddress'];
        $new_contact = new Contact($name, $StreetAddress, $PhoneNumber, $EmailAddress);
        array_push($_SESSION['contacts'], $new_contact);
        return $app->redirect('/');
    });

    $app->get('/empty_inventory', function() use ($app){
        Contact::clear();
        return $app->redirect('/');
    });

    return $app;
?>
