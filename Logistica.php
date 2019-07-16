<?php
$connection = mysqli_connect("labugaderiaco.ipagemysql.com", "marzuq", "GS-m10sue.87SED", "gs_marzuq" );

if (!$connection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}
$connection->set_charset("UTF8");

$result = mysqli_query($connection, "SELECT *  FROM gs_subtype");

mysqli_close($connection);

$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
?>