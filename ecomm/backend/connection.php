<?php

class Database
{
    private $username = "root";
    private $hostname = "localhost";
    private $password = "";

    private $database = "ecom";

    public $name = "amit";

    public $error = array();

    private $connection = null;
    public function __construct()
    {
        session_start();
        $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        // $test = "amit"

        if (!$this->connection) {
            echo "error";
        }
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM users WHERE email='$username' and password='$password'";

        $executeQuery = mysqli_query($this->connection, $query);

        if ($executeQuery) {
            if (mysqli_num_rows($executeQuery) >= 1) {
                $_SESSION['username'] = $username;
            } else {
                echo "Failed";
            }
        } else {
            echo "Error";
        }
    }

    public function checkSession()
    {
        print_r($_SESSION);
    }

    public function logout()
    {
        session_destroy();
    }

    public function checkIfUserExists($user, $colName)
    {
        $select = "SELECT * FROM users WHERE $colName = '$user'";
        // echo $select;
        $executeQuery = mysqli_query($this->connection, $select);
        if (mysqli_num_rows($executeQuery) >= 1) {
            return true;
        }

        return false;
    }

    public function register($userData)
    {

        // echo "working";
        $username = $userData['email'];
        // echo $username;
        $keys = array_keys($userData);

        $columnName = $keys[2];

        $keys = implode(',', $keys);
        $userValues = [];
        foreach ($userData as $values) {
            $userValues[] = "'$values'";
        }

        $userValues = implode(',', $userValues);

        // exit();
        // echo $this->checkIfUserExists($username , $columnName);
        if (!$this->checkIfUserExists($username, $columnName)) {

            $insertQuery = "INSERT INTO users ($keys) VALUES ($userValues)";
            echo $insertQuery;
            try {
                $executeQuery = mysqli_query($this->connection, $insertQuery);
                if ($executeQuery) {
                    echo "Success";
                } else {
                    // $this->error.array_push("Something went wrong");
                    echo "Something went wrong";
                }
            } catch (Exception $e) {
                echo $e;
            }
        } else {
            echo "user already exists";
        }

    }


}

$db = new Database();
// $userInfo = [
//     "firstname" => "sonal",
//     "lastname" => "kasabe",
//     "email" => "sonal@codeseed.in",
//     "address" => "address",
//     "phone" => "8830231066",
//     "role" => 1,
//     "password" => "test@test.com"
// ];

// $db->register($userInfo);