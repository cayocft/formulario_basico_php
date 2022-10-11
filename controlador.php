<?php
    
    if( isset($_POST['submit']) && !empty($_POST['submit'])){
        $nombre = $_POST['nombre'];
        echo "El valor ingreso en el input fue: ".$nombre;
    }
