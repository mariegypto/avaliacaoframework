<?php
function dd($input){ //mostra a variavel e mata o código ao invocar ela, da um breakpoint, usa para ir testando a variável
    var_dump($input); //mostra todas as informações do objeto
    die();//break
}

function env($nameOfVariable){
    return $_ENV[$nameOfVariable];
}

function view($input){
    echo json_encode($input);
}