<?php
include('db/connexion.php');
$query = '';
$output = array();
$query .= "SELECT * FROM acteurs ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE region LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR departement LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR commune LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR acteur LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR nom LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR prenom LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR sexe LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR naissance LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR age LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR domaine LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR annee LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR categorie LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = mysqli_query($conn, $query);
    //  var_dump($statement);die();

$number_filter_row = mysqli_num_rows($statement);
// var_dump($statement);die();
$statement = mysqli_query($conn, $query );
// var_dump($statement);die();

$result = mysqli_fetch_all($statement,MYSQLI_ASSOC);
// var_dump($result);die();
foreach($result as $row)
{
 
 $sub_array = array();
 $sub_array[] = $row["region"];
 $sub_array[] = $row["departement"];
 $sub_array[] = $row["commune"];
 $sub_array[] = $row["acteur"];
 $sub_array[] = $row["nom"];
 $sub_array[] = $row["prenom"];
 $sub_array[] = $row["sexe"];
 $sub_array[] = $row["naissance"];
 $sub_array[] = $row["age"];
 $sub_array[] = $row["domaine"];
 $sub_array[] = $row["annee"];
 $sub_array[] = $row["categorie"];
 $sub_array[] = $row["lieu"];
 $sub_array[] = $row["telephone"];
 $sub_array[] = $row["zones"];
 $sub_array[] = $row["type_produit"];
 $sub_array[] = $row["mode"];
 $sub_array[] = $row["commercialisation"];
 $sub_array[] = $row["circuit"];
 $sub_array[] = $row["qte_produite"];
 $sub_array[] = $row["qte_vendue"];
 $sub_array[] = $row["experience"];
 $sub_array[] = $row["type_agriculture"];
 $sub_array[] = $row["engagement"];
 $sub_array[] = $row["produit"];
 $sub_array[] = $row["periode"];
 $data[] = $sub_array;
}

function get_total_all_records()
{
 include('db/connexion.php');
 $statement = mysqli_query($conn,"SELECT * FROM acteurs");
 
 $result = mysqli_fetch_all($statement);
 $number_filter_row = mysqli_num_rows($statement);
 return $number_filter_row;
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $number_filter_row,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>
   