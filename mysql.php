<?php
    $connection = mysqli_connect("localhost","root","","stockdb");
    $sqlArray = [];

    function query($sql) { // to get data from SQL
        global $connection;
        $data = mysqli_query($connection, $sql);
        while($tempSQLArray = mysqli_fetch_assoc($data)) {
            global $sqlArray;
            $sqlArray[] = $tempSQLArray;
        }
        return $sqlArray;
    }

    function insertData($sql) { // to insert data to SQL
        global $connection;
        mysqli_query($connection, $sql);
        return mysqli_affected_rows($connection);
    }
    function updateData($sql) { // to update data to SQL
        global $connection;
        mysqli_query($connection, $sql);
        return mysqli_affected_rows($connection);
    }
    function deleteData($sql) { // to delete data to SQL
        global $connection;
        mysqli_query($connection, $sql);
        return mysqli_affected_rows($connection);
    }

?>