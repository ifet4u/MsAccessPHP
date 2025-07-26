<?php

class Model
{
    public function connect()
    {
        try {
            $string = "odbc:DRIVER={" . DRIVER . "}; DBQ=" . PATH . "; Uid=; Pwd=" . PASS . ";";
            $conn = new PDO($string);
            return $conn;

        } catch (PDOException $pe) {
            echo $string;
            echo "<br><strong>Database connection error:</strong><br>";
            echo $pe->getMessage();
            echo "</br>";
            echo "<h2>1. Make sure the PHP_PDO_ODBC extension is enabled in PHP.</h2>";
            echo "<h2>2. Check the ODBC driver being used for the connection.</h2>";
            echo (PHP_INT_SIZE === 8) ? "PHP is 64-bit" : "PHP is 32-bit <br>";
            die();
        }
    }

    public function get($sql)
    {
        $data = $this->connect()->prepare($sql);
        $data->execute();
        return $data;
    }

    public function all($sql)
    {
        $data = $this->get($sql);
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first($sql)
    {
        $sql = str_ireplace("select", "SELECT TOP 1", $sql);
        $data = $this->get($sql);
        return $data->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        if ($stmt->execute($data)) {
            // Fetch the last inserted ID in Access
            $result = $conn->query("SELECT @@IDENTITY");
            return $result->fetchColumn();
        } else {
            return false;
        }
    }

    public function edit($table, $data, $where = null)
    {
        $updates = [];
        foreach ($data as $column => $value) {
            $updates[] = "$column = :$column";
        }

        $update_str = implode(', ', $updates);
        $sql = "UPDATE $table SET $update_str";
        if ($where !== null) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->connect()->prepare($sql);
        if ($stmt->execute($data)) {
            return $stmt->rowCount() > 0;
        } else {
            return false;
        }
    }

    public function delete($table, $where)
    {
        if (!$where) {
            throw new Exception("DELETE requires a WHERE condition for safety.");
        }

        $sql = "DELETE FROM $table WHERE $where";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute();
    }
}
