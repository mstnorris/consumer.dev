<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://passport.dev/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => '2',
            'client_secret' => 'Xc8ZO7kCqePQkCg6Zc8sKwV7RuNIxB3rqDmS5Dof',
            'username' => 'mstnorris@gmail.com',
            'password' => 'secret',
            'scope' => '*',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});
