<?php

use Illuminate\Support\Facades\Route;



Route::get('/tarefas', function () {

    $tarefas = [
        'Estudar Laravel',
        'Assistir Friends',
        'Ir ao mercado',
        'Inscrever no canal do Andrey',
        'Acompanhar os videos postados',
        'Tirar 10 na PS'
    ];

    echo '<h1>Tarefas para fazer</h1>';
    echo '<ul>';
    foreach($tarefas as $tarefa) {
        echo '<li>'$tarefa'</li>';
    }
    echo '</ul>';

    return view('welcome');
});
