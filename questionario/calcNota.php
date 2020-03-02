<?php

function getNota($modulo, $connection, $idUsuario) {
    $queryNotas = mysqli_query($connection, "select situacao from vnotas where usuario_idUsuario = '$idUsuario' and modulo_idModulo = $modulo");
    $soma = 0;
    $quantSoma = 100 / mysqli_num_rows($queryNotas);
    while ($fetchNotas = mysqli_fetch_array($queryNotas)) {
        if (strcmp($fetchNotas['situacao'], "ACERTOU") == 0) {
            $soma = $soma + $quantSoma;
        }
    }
    return $soma;
}
