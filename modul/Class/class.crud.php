<?php
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


    function test()
    {
        echo "test çalışıyor";
    }
}
