<?php


require_once __DIR__ . '/php/Router.php';
$router = new Router();
$router->get('/', 'home');
$router->get('/login', 'login');
$router->get('/dashboard', 'dashboard');
$router->get('/cargaisons', 'cargaisons');
$router->get('/cargaisons/new', 'newcargaison');
$router->get('/colis', 'colies/colis');
$router->get('/details', 'colies/details');
$router->get('/destinataire', 'colies/destinataire');
$router->get('/cargaisons/details', 'cargaison_details');

$router->dispatch();