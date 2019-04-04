<?php

$filename = "users.csv";

if(file_exists($filename)){

    $file = fopen($filename, "r");

    $data = array();
    

    $headers = explode(",", fgets($file));

    while($row = fgets($file)){

        $rowData = (explode(",", $row));
        $linha  = array();
       
        for ($i = 0; $i < count($headers); $i++){

            $linha[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $linha);
    }
    
    fclose($file);

    echo json_encode($data);
}

?>