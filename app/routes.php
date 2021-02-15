<?php
$router->get('', 'PagesController@home');
$router->post('results', 'PagesController@gameover');
$router->get('kukanq', 'PagesController@api');
//$router->post('users', 'UsersController@store'); for POSTs