<?php

    //this is the basic way of getting a database handler from PDO, PHP's built in quasi-ORM
    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
    $query = "SELECT rack FROM racks WHERE length=7 order by random() limit 0, 1";
    $query1 = "SELECT words From racks Where rack =$query;
    $statement = $dbhandle->prepare($query);
    $statement2 = $dbhandle->prepare($query2);
    $statement->execute();
    $statment2->execute;
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $results2 = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results, $results2);
    
?>
