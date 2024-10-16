<?php
require "vendor/autoload.php";
session_start();

use Config\Router;

$router = new Router();

/** j'utilise la methode addRouute de mon controller pour ajouter des routes au controller
 *  cette methode prends trois argument, la route, le controller et la methode executé
 */
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/register', 'RegisterController', 'index');
$router->addRoute('/login', 'LoginController', 'index');
$router->addRoute('/logout', 'LogoutController', 'logout');
$router->addRoute('/createPokemon', 'PokemonController', 'addPokemon');
$router->addRoute('/detail', 'PokemonController', 'detail');
$router->addRoute('/modifier', 'PokemonController', 'modify');
$router->addRoute('/deletePokemon', 'PokemonController', 'deletePokemon');

$router->handleRequest();