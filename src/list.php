<?php
include('includes/datas.php');

echo file_get_contents('templates/head.html');

// print_r( kerTermekek() );

$termekek = kerTermekek();

$content = "";
foreach($termekek as  list($nev, $ar, $mennyiseg)   ) {

    $row = "<tr>";
    $row = $row . "<td>" . $nev . "</td>";
    $row = $row . "<td>" . $ar . "</td>";
    $row = $row . "<td>" . $mennyiseg . "</td>";
    $row = $row . "</tr>";

    $content = $content . $row;
}

echo $content;

$page = file_get_contents('templates/list.html');
$newpage = str_replace('{{ tartalom }}', $content, $page );
echo $newpage;

echo file_get_contents('templates/foot.html');


