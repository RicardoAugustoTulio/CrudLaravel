<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        
    });
        
        Route::group(['middleware' => ['auth']], function() {
            
            Route::get("/produtos",
                "ProdutosController@index")->name("produtos.index");
            Route::get('/produtos/create',
                'ProdutosController@create')->name('produtos.create');
            Route::post("/produtos/create",
                "ProdutosController@store")->name("produtos.store");
            Route::delete("/produtos/{produto}/delete",
                "ProdutosController@destroy")->name("produtos.destroy");
            Route::get("/produtos/{produto}/show",
                "ProdutosController@show")->name("produtos.show");
            //abrir o formulario
            Route::get("/produtos/{produto}/edit",
                "ProdutosController@edit")->name("produtos.edit");
            //salvar novos dados - update
            Route::patch("/produtos/{produto}/update",
                "ProdutosController@update")->name("produtos.update");
            
            Route::get("/users",
                "UsersController@index")->name("users.index");
            Route::get('/users/create',
                'UsersController@create')->name('users.create');
            Route::post("/users/create",
                "UsersController@store")->name("users.store");
            Route::delete("/users/{user}/delete",
                "UsersController@destroy")->name("users.destroy");
            Route::get("/users/{users}/show",
                "UsersController@show")->name("users.show");
            //abrir o formulario
            Route::get("/users/{users}/edit",
                "UsersController@edit")->name("users.edit");
            //salvar novos dados - update
            Route::patch("/users/{users}/update",
                "UsersController@update")->name("users.update");
            
            Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        });
});





