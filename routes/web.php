<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/albums', function() {
    return response()->json([
            [
                'title' => 'Taylor Swift',
                'artist' => 'Taylor Swift',
                'url' => 'https://www.amazon.com/1989-Taylor-Swift/dp/B00MRHANNI/ref=ntt_mus_ep_dpi_1',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SL1400_.jpg',
                'thumbnail_image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SY355_.jpg'
            ],
            [
                'title' => 'Taylor Swift2',
                'artist' => 'Taylor Swift',
                'url' => 'https://www.amazon.com/1989-Taylor-Swift/dp/B00MRHANNI/ref=ntt_mus_ep_dpi_1',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SL1400_.jpg',
                'thumbnail_image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SY355_.jpg'
            ],
            [
                'title' => 'Taylor Swift3',
                'artist' => 'Taylor Swift',
                'url' => 'https://www.amazon.com/1989-Taylor-Swift/dp/B00MRHANNI/ref=ntt_mus_ep_dpi_1',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SL1400_.jpg',
                'thumbnail_image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SY355_.jpg'
            ],
            [
                'title' => 'Taylor Swift4',
                'artist' => 'Taylor Swift',
                'url' => 'https://www.amazon.com/1989-Taylor-Swift/dp/B00MRHANNI/ref=ntt_mus_ep_dpi_1',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SL1400_.jpg',
                'thumbnail_image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SY355_.jpg'
            ],
            [
                'title' => 'Taylor Swift5',
                'artist' => 'Taylor Swift',
                'url' => 'https://www.amazon.com/1989-Taylor-Swift/dp/B00MRHANNI/ref=ntt_mus_ep_dpi_1',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SL1400_.jpg',
                'thumbnail_image' => 'https://images-na.ssl-images-amazon.com/images/I/717DWgRftmL._SY355_.jpg'
            ],
        ]
    );
});