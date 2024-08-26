<?php

function getAllFrom($conn, $table)
{
    $respuesta = array();
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $respuesta[] = $row;
        }
    }
    mysqli_close($conn);
    return $respuesta;
}
