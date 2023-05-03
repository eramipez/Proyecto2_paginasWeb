<?php
    $conect=mysql_connect('localhost','root','');
    if(!$conect){
        echo"No se conecto con el servidor";
    }else{
        $base=mysql_select_db('compra');
        if(!$base){
            echo"No se encontro una base de datos";
        }
    }
    $Nombre=$_POST['Nombre'];
    $NTC=$_POST['NTC'];
    $Email=$_POST['Email'];
    $CP=$_POST['CP'];
    $Ref=$_POST['Ref'];
    $Dia=$_POST['Dia'];
    $Mascota=$_POST['Mascota'];
    $sql="INSERT INTO datos Values('$Nombre',
                                    '$NTC',
                                    '$Email',
                                    '$CP',
                                    '$Ref',
                                    '$Dia',
                                    '$Mascota')";

    $ejecutar=mysql_query($sql);
    if(!$ejecutar){
        echo"Hubo algun error";
    }else{
        echo"Datos guardados </br><a href='Proyecto_Tienda_de_mascotas.html'>volver</a> ";
    }
?>