<?php

$teste="a,b,c";

switch ($teste) {
    case "a,b,c":
        echo "Entrou no primeiro case";
        break;

        case 1;
            echo "Entrou no case 1";
            break;

            default:
            echo "Entrou no default";
            break;
}
?>


<?php

$dia=12;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;


        case 2:
            echo "Segunda";
            break;


            case 3:
                echo "Terça";
                break;


                case 4:
                    echo "Quarta";
                    break;


                    case 5:
                        echo "Quinta";
                        break;


                        case 6:
                            echo "Sexta";
                            break;


                            case 7:
                                echo "Sábado";
                                break;

                                default:
                                echo "Número Invalido. Digite um número de 1 a 7";
                                break;
}

?>