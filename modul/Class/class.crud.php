<?php
session_start();
ob_start();
require_once 'dbconfig.php';
class crud
{
    private $db;
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpassword = DBPWD;
    private $dbname = DBNAME;




    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=utf8', $this->dbuser, $this->dbpassword);
            // echo "bağlantı başarılı";
        } catch (Exception $e) {

            die("Bağlantı başarısız" . $e->getMessage());
        }
    }


    public function AdminsLogin($AdminsUserName, $AdminsPassword)
    {
        try {

            $stmt = $this->db->prepare("SELECT * FROM admins WHERE admins_username=? AND admins_password=?");
            $stmt->execute([$AdminsUserName, md5($AdminsPassword)]);

            if ($stmt->rowCount() == 1) {


                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION["admins"] = [
                    "adminsUserName" => $AdminsUserName,
                    "admins_namesurname" => $row['admins_namesurname'],
                    "admin_time" => $row['admins_time'],
                    "admins_file" => $row['admins_file']


                ];
                return ['status'] == true;
            } else {
                return  ['status'] == false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function Read($tableName)
    {
        try {
            $stmt = $this->db->prepare("SELECT * from $tableName  ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
