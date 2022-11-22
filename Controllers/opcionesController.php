<?php

class opcionesController
{

    public function main()
    {
        include "Views/lstOpciones.php";
    }

    public function opcion1()
    {
        $validacion = strpos($_POST['arrayPunto1'], ",");
        if (!$validacion) {
            echo "Separar por , los números del arreglo ";
            exit;
        }
        $array = explode(",", $_POST['arrayPunto1']);

        $total = 0;
        foreach ($array as $row) {

            if ($row === 8) {
                $total += 5;
            } else if ($row % 2 == 0) {
                $total++;
            } else {
                $total += 3;
            }
        }
        echo " Total: " . $total;
        exit;
    }
    public function opcion2()
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

        if ($this->validateNumberNegative($num1) || $this->validateNumberNegative($num2)) {
            echo '-1';
            exit;
        }

        if ($num1 > $num2) {
            echo '0';
            exit;
        }

        $n1 = array_search($num1, $array);
        $n2 = array_search($num2, $array);

        if (!$n1 && !$n2) {
            echo '0';
            exit;
        }

        if ($n1 && $n2) {
            $posicion = ($n2 - $n1) + 1;
            echo " Total: " . array_sum(array_slice($array, $n1, $posicion));
            exit;
        }

        if ($n1 && !$n2) {
            echo " Total: " . array_sum(array_slice($array, $n1));
            exit;
        }

        if (!$n1 && $n2) {
            $posicion = ($n2 - $n1) + 1;
            echo " Total: " . array_sum(array_slice($array, 0, $posicion));
            exit;
        }
    }


    public function opcion3()
    {
        $validacion = strpos($_POST['horaMinutos'], ":");
        if (!$validacion) {
            echo "Recuerda que el formato es hh:mm";
            exit;
        }
        $array_hora = explode(":", $_POST['horaMinutos']);

        $hora = $array_hora[0];
        $minutos = $array_hora[1];

        if (!is_numeric($hora) || !is_numeric($minutos)) {
            echo "Recuerda ingresar sólo número, ejemplo: 10:12";
            exit;
        }

        $angulo =   (30 * $hora) - (6 * $minutos);
        $angulo = abs($angulo);

        if ($angulo > 180) {
            $angulo = 360 - $angulo;
        }
        echo "El ángulo menor es: " . $angulo;
        exit;
    }

    public function opcion4()
    {

        if (!is_numeric($_POST["fila"]) || !is_numeric($_POST["columna"]) || !is_numeric($_POST["i"]) || !is_numeric($_POST["j"])) {
            echo "Recuerda ingresar sólo números.";
            exit;
        }


        $ejeX = range(0, $_POST["fila"]);
        $ejeY = range(0, $_POST["columna"]);
        $sum = 0;
        foreach ($ejeY as $y) {
            foreach ($ejeX as $x) {
                $ejesYX[$y][$x] = $sum++;
            }
        }

        if ($_POST["i"] > count($ejesYX)) {
            echo "fila mayor a tamaño del arreglo";
            exit;
        }
        if ($_POST["j"] > count($ejesYX)) {
            echo "columnas mayor a tamaño del arreglo";
            exit;
        }

        // Creamos la tabla
        $html = '<table border>';
        $html .= '<th></th>';

        // Para crear las columnas X ( $ejeX = 1 a 10 )
        foreach ($ejeX as $col_X) {

            $html .= '<th>' . $col_X . '</th>';
        }

        foreach ($ejesYX as $col_Y => $valores) {

            $html .= '<tr>';
            // Para crear las columnas Y ( $ejeY = 1 a 10 )
            $html .= '<td><b>' . $col_Y . '</b></td>';

            foreach ($valores as $val) {
                // Creamos los campos de los valores
                $html .= '<td>' . $val . '</td>';
            }

            $html .= '</tr>';
        }
        $html .= '</table><br><p>Valor de la posición: ' . $ejesYX[$_POST["i"]][$_POST["j"]] . '</p>';

        echo $html;
        exit;
    }


    public function validateNumberNegative($num)
    {
        if (is_numeric($num) && $num < 0) {
            return true;
        }
        return false;
    }
}
