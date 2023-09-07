<?php

use Src\Agenda\MatchResult\Presentation\HTTP\MatchResultController;

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group([
    'prefix' => 'match-result'
], function () use ($router) {
    $router->get('index', [MatchResultController::class, 'index']);
    // Route::get('{id}', [MatchResultController::class, 'show']);
    // Route::post('', [MatchResultController::class, 'store']);
    // Route::put('{id}', [MatchResultController::class, 'update']);
    // Route::delete('{id}', [MatchResultController::class, 'destroy']);
});
