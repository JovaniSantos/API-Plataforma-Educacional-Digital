<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TarefaController;


    /*
    |--------------------------------------------------------------------------
    | Rotas da API
    |--------------------------------------------------------------------------
    */
    Route::get('/teste', function () {
        return view('welcome');
    });
?>


