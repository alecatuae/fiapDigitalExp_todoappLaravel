<?php

namespace App\Http\Controllers;

class TarefasController 
{
    public function index()
    {
        $tarefas = [
            'Estudar Laravel',
            'Assistir Friends',
            'Ir ao mercado',
            'Inscrever no canal do Andrey',
            'Acompanhar os videos postados',
            'Tirar 10 na PS'
        ];
    
        $html = '<h1>Tarefas para fazer</h1>';
        $html .= '<ul>';
        foreach($tarefas as $tarefa) {
            $html .= "<li> $tarefa </li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
