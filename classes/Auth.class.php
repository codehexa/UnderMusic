<?php
class Auth {
    var $userId;
    var $userPw;
    var $db;
    var $isLogin;
    var $hashToken;

    public function __construct($db)
    {
        $this->db = $db;
        $this->isLogin = false;
    }

    public function login($userId,$userPw){
        $this->userId = $userId;
        $this->userPw = $userPw;

        $sql = "select * from users where email='{$this->userId}'";
        $que = $this->db->getObject($sql);

        $savedPassword = $que->password;

        if (password_verify($this->userPw,$savedPassword)){
            $this->isLogin = true;

            $hashPwStr = $this->updateHash();
        }

        return ["result"=>$this->isLogin,"token"=>$hashPwStr];
    }

    public function register($userId,$userPw){
        $this->userId = $userId;
        $this->userPw = $userPw;
        $sql = "select ifnull(count(*),0) as cnt from users where email='{$this->userId}'";
        $que = $this->db->getObject($sql);

        $cnt = $que->cnt;

        $pw = password_hash($this->userPw,PASSWORD_DEFAULT);

        if ($cnt <= 0){
            $usArray = explode("@",$this->userId);
            $usName = $usArray[0];
            $sql2 = "insert into users set ";
            $sql2 .= " name='{$usName}'";
            $sql2 .= " ,email='{$this->userId}'";
            $sql2 .= " ,password='{$pw}'";
            $sql2 .= " ,power='USER'";
            $sql2 .= " ,created_at=now()";

            $this->db->doQuery($sql2);

            $hashPwStr = $this->updateHash();

            return ["result"=>true,"token"=>$hashPwStr];
        } else {
            return ["result"=>false,"token"=>null];
        }
    }

    private function updateHash(){
        $hashPwStr = hash("sha256",$this->userPw);
        $sql2 = "update users set remember_token='{$hashPwStr}' where email='{$this->userId}'";
        $this->db->doQuery($sql2);

        return $hashPwStr;
    }

    public function getAuthByHash($hash){
        $sql = "select * from users where remember_token='{$hash}'";
        $rs = $this->db->getObject($sql);

        $this->hashToken = $hash;

        return $rs;
    }

    public function getHash(){

    }
}