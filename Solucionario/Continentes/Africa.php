<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ÁFRICA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("LAGOS", "JOHANESBURGO", "NAIROBI"),
    array("EL CAIRO", "CASABLANCA", "ACCRA", "KINSHASA"),
    array("JOHANESBURGO", "NAIROBI", "LAGOS")
);

$Africa = array(
    'GAHNA' => array(
        'Lagos' => array("LAGOS", "ABUJA", "IBADAN"),
        'Abuja' => $cantones[1],
        'Kano' => ["KANO"],
        'Ibadan' => array("IBADAN", "ABEOKUTA", "AKURE"),
        'Kaduna' => array("KADUNA", "ZARIA", "KAFANCHAN")
    ),

    'LIBIA' => array(
        'Gauteng' => array("JOHANESBURGO", "PRETORIA", "SOWETO"),
        'Cabo Occidental' => $cantones[1],
        'KwaZulu-Natal' => ["DURBAN", "PIETERMARITZBURG"],
        'Limpopo' => array("POLOKWANE", "TZANEEN", "MOKOPANE")
    ),

    'CAMERUN' => array(
        'Nairobi' => array("NAIROBI", "MOMBASA", "KISUMU"),
        'Mombasa' => $cantones[1],
        'Kisumu' => ["KISUMU"],
        'Nakuru' => array("NAKURU", "ELDORET", "KERICHO")
    ),
);

?>

</body>

</html>
