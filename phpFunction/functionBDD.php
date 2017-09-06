<?php
function bdd()
{
    $servername = "localhost";
    $username = "hirsch";
    $passwd = "2310";
    $dbname  = "myDBTO";
    $conn = new mysqli($srvername,$username,$passwd,$dbname);
    if ($conn->connect_error)
    {
        die("la connection a échoué". $conn->connect_error);
    }
    else
    {
       return $conn;
    }
    
}


function lecturetchatBddmyDBTO($variableNomTable)
{
    $conn = bdd();
    $sql= "SELECT * FROM " .$variableNomTable." ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result->num_rows >0 )
    {
        while($row = $result -> fetch_assoc())
        {
            echo "</br><b>id:".$row['id']."- login:".$row['login']."</b></br>message:<p>".$row['phrase']."</p><i>".$row['heure']."</i>";
            $_SESSION['id'] = $row['id'];
        }
    }
   // echo $sql;
}

function insertion_document_bdd($document,$nom)
{
    $conn = bdd();
    $sql = "INSERT INTO document (adresse,personne) VALUES ('".$document."','".$nom."')";
    if ($conn->query($sql)===TRUE)
    {
        echo"insertion dans la bdd ok";
    }
    else 
    {
        echo "ERREUR". $sql ."</br>". $conn->error;
    }
    
}



function lectureDoc()
{
    $conn = bdd();
    $sql = "SELECT * FROM document";
    $result = $conn->query($sql);
    while ($row = $result ->fetch_assoc())
    {
        echo "<p></br><b>id: </b>".$row["id"]. " adresse du document <a href='" .$row["adresse"]. "'>adresse</a> personne: ".$row["personne"]."</p>";
    }
}

function lectureDocLogin($nom)
{
    $conn = bdd();
    $sql = "SELECT * FROM document";
    $result = $conn->query($sql);
    while ($row = $result ->fetch_assoc())
    {
        $tabnom = explode(",",$row["personne"]);
        if (in_array($nom,$tabnom))
        {
            echo "<p></br><b>id: </b>".$row["id"]. " adresse du document <a href='" .$row["adresse"]. "'>adresse</a> personne: ".$row["personne"]."</p>";
        }
    }
}

function login()
{
    $conn = bdd();
    $sql = "SELECT * FROM personne";
    $result = $conn->query($sql);
    return $result;
}
//fonction à supprimer
//
//
//
//
/*
function dernierElmt($variableNomTable)
{
    $servername = "localhost";
    $username = "hirsch";
    $passwd = "2310";
    $dbname  = "myDBTO";
    $conn = new mysqli($srvername,$username,$passwd,$dbname);
    $sql= "SELECT * FROM " .$variableNomTable." WHERE id=MAX(id)";
    $result = $conn->query($sql);
    if ($result->num_rows >0 )
    {
        if ($_SESSION['id'] !== $result['id'])
        {
            echo "</br><b>id:".$result['id']."- login:".$result['login']."</b></br>message:<p>".$result['phrase']."</p><i>".$result['heure']."</i>";
        }
    }
    
}

*/