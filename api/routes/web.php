<?php

$router->get('/', function () use ($router) {

    return $router->app->version();

});

$router->get('/tarefa', "TarefaController@index");
$router->post('/tarefa', "TarefaController@store");
