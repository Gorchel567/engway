<?php

$router->get('/', ['uses' => 'HomeController@index']);
$router->get('/lesson/{id}', ['uses' => 'HomeController@lesson']);
$router->post('/signup', ['uses' => 'HomeController@signup']);

$router->get('/exam', ['uses' => 'ExamController@index']);
$router->get('/private', ['uses' => 'HomeController@private']);
