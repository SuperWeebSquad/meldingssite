<?php
function sendDataModel()
{
    $tabel = $_POST['School'];
    $conn = OpenDatabaseConnection();
    $keys = [];
    $data = [];
    foreach ($_POST as $key => $ls_value) {
        if ($key != 'School') {
            $keys[] = $key;
            $data[] = $ls_value;
        }
    }
    $dataString = implode(", ", $data); // convert array to comma separated string
    $keyString = implode(", ", $keys);
    $sql = "INSERT INTO `$tabel`  ($keyString) VALUES (";
            foreach ($data as $key) {
                $sql .= '"';
                $sql .= $key;
                $sql .= '",';
            }
    $sql = substr($sql, 0, -1);
            $sql .= ")";
    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    // 2 verschillende functies maken, 1e add hij de locatie en krijgt hij een id, 2e gebruikt hij deze id om hem te inserten
}
