<?php

$numero = 5;
$nome = "";

switch($numero) {

    case 4:
        echo "O número é igual a 4 <br>";
        break;

    case 5:
        echo "O número é igual a 5 <br>";
        break;

        default;
        echo "O número não corresponde aos valores <br>";

}

switch($nome) {

    case "Rosana";
        echo "O nome dela é Rosana";
        break;

    case "Isis";
        echo "O nome dela é Isis";
        break;

        default;
            echo "O nome não foi encontrado";
}

?>
