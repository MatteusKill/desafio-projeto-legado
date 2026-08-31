<?php

spl_autoload_register(function ($nome_da_classe) {
    $classe_relativa = str_replace('desafio-projeto-legado\\', '', $nome_da_classe);
    $classe_relativa = str_replace('\\', '/', $classe_relativa);

    $file = BASE_DIR . "/" . $classe_relativa . ".php";

    if (file_exists($file)) {
        include $file;
    } else {
        throw new Exception("Arquivo não encontrado: " . $file);
    }
});
