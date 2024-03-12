<?php
$costoTotal = 0;

if (isset($_POST['rut']) && !empty($_POST['rut'])) {
    $rut = $_POST['rut'];
} else {
    echo "<script>alert('No se ha ingresado el rut. Vuelva a intentar'); window.history.back()</script>";
}

if (isset($_POST['nm']) && !empty($_POST['nm'])) {
    $nombre = ucwords(strtolower($_POST["nm"]));  //Se convierte en mayusculas la primera letra de cada nombre
} else {
    echo "<script>alert('No se ha ingresado el nombre. Vuelva a intentar'); window.history.back()</script>";
}

if (isset($_POST['sexo']) && !empty($_POST['sexo'])) {
    $sexo = $_POST['sexo'];
} else {
    echo "<script>alert('No se ha seleccionado el sexo. Vuelva a intentar'); window.history.back()</script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['TCorte'])) {
        $opcionesSeleccionadas = $_POST['TCorte'];
    } else {
        echo "<script>alert('No se ha seleccionado el servicio. Vuelva a intentar'); window.history.back()</script>";
    }
}
if ($sexo == "2" && in_array("Afeitado", $opcionesSeleccionadas)) {
    echo "<script>alert('Las mujeres no pueden seleccionar el servicio de afeitado.');window.history.back()</script>";
    die();
}

if ($sexo == 1) {
    $hombre = ['Corte de cabello', 'Corte al cero', 'Afeitado', 'Masaje capilar', 'Teñido', 'Peinado'];
    $valorhombre = [10000, 7000, 8000, 12000, 11000, 18000];

    if (in_array("Corte al cero", $opcionesSeleccionadas) && in_array("Peinado", $opcionesSeleccionadas)) {
        echo "<script>alert('No es posible seleccionar ambos servicios: Corte al cero y Peinado al mismo tiempo.');window.history.back()</script>";
        die();
    }
    echo"Se registro el Rut: ". $rut . " <br> Nombre de: ". $nombre . " <br> Genero: Hombre <br>";
    foreach ($opcionesSeleccionadas as $opcion) {
    
        $indice = array_search($opcion, $hombre);
        echo "Servicio seleccionado: " . $opcion . " con un valor de: " . $valorhombre[$indice] . "<br>";
        $costoTotal += $valorhombre[$indice];
    }
    echo" Valor total: ". $costoTotal ;

}

if ($sexo == 2) {
    $mujer = ['Corte de cabello', 'Corte al cero', 'Masaje capilar', 'Teñido', 'Peinado'];
    $valormujer = [15000, 7000, 15000, 18000, 20000];


    if (in_array("Corte al cero", $opcionesSeleccionadas) && in_array("Peinado", $opcionesSeleccionadas)) {
        echo "<script>alert('No es posible seleccionar ambos servicios: Corte al cero y Peinado al mismo tiempo.');window.history.back()</script>";
        die();
    }
    echo"Se registro el Rut: ". $rut . " <br> Nombre de: ". $nombre . " <br> Genero: Mujer <br>";
    foreach ($opcionesSeleccionadas as $opcion) {
    
        $indice = array_search($opcion, $mujer);
        echo "Servicio seleccionado: " . $opcion . " con un valor de: " . $valormujer[$indice] . "<br>";
        $costoTotal += $valormujer[$indice];
    }
    echo" Valor total: ". $costoTotal ;

    

}
