<?php
$router->get('', 'PagesController@home');
$router->post('results', 'PagesController@gameover');
//$router->post('users', 'UsersController@store'); for POSTs