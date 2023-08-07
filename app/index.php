<?php
    $conn = new mysqli('maria-db', 'user', 'loveis', 'php_docker');
    if ($conn) {
        echo "db connected<br>";
    } else {
        echo "something wrong<br>";
    }

    $sql = "INSERT INTO test(name, age, sex) VALUES('SW', 17, 'f')";
    if ($conn->query($sql) === TRUE) {
        echo "insert sucsess<br>";
    } else {
        echo "insert error<br>";
    }
    $conn->close();
?>