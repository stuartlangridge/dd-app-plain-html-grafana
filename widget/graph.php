<?php

$GRAPHS = array(
    "Edit Count" => 'https://grafana.wikimedia.org/render/d-solo/000000208/edit-count?orgId=1&from=1632929776874&to=1633102576875&panelId=8&width=1000&height=500&tz=Europe%2FLondon',
    "CPU Utilization" => 'https://grafana.wikimedia.org/render/d-solo/000000377/host-overview?orgId=1&from=1633424424892&to=1633435224892&var-server=acmechief-test1001&var-datasource=thanos&var-cluster=acmechief&panelId=3&width=1000&height=500&tz=Europe%2FLondon'
);

$t = $_GET["title"] ?? "none";

header("Content-Type: image/png");
if (array_key_exists($t, $GRAPHS)) {
    $handle = fopen($GRAPHS[$t], "r");
    fpassthru($handle);
} else {
    readfile("missing.png");
}

?>