<?php
class DB {
    var $host;
    var $userId;
    var $password;
    var $dbname;
    protected  $db;

    public function __construct()
    {
        $this->host = "under.hayoonsoft.com";
        $this->userId = "underuser";
        $this->password = "!underuser2";
        $this->dbname = "undermusic_db";

        $this->db = $this->connect();
        
    }

    function __destruct()
    {
        mysqli_close($this->connect());
    }

    private function connect(){
        $dbconn = mysqli_connect($this->host,$this->userId,$this->password,$this->dbname);
        mysqli_set_charset($dbconn,"utf8");
        if (mysqli_connect_errno()){
            printf("Connect failed: %s\n",mysqli_connect_errno());
            exit();
        } else {
            return $dbconn;
        }
    }

    public function getQuery($sql){
        $result = mysqli_query($this->db, $sql);
        $fetch = mysqli_fetch_assoc($result);
        return $fetch;
    }

    public function getObject($sql){
        $result = mysqli_query($this->db, $sql);
        $fetch = mysqli_fetch_object($result);
        return $fetch;
    }

    public function doQuery($sql){
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function getId(){
        return $this->db->insert_id;
    }

    public function getData($sql){
        $result = mysqli_query($this->db, $sql);
        $fetch = [];
        if ($result){
            while ($rs = mysqli_fetch_assoc($result)){
                $fetch[] = $rs;
            }
        }
        
        return $fetch;
    }

    public function getDataObject($sql){
        $result = mysqli_query($this->db, $sql);
        $fetch = [];
        while ($rs = mysqli_fetch_object($result)){
            $fetch[] = $rs;
        }
        return $fetch;
    }



    public function dbClose(){
        mysqli_close($this->db);
    }
}