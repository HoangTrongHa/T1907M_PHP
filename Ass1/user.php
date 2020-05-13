<?php
namespace assignment1;
require_once "../Ass1/connectdb.php";

class User{
    public $id;
    public $name;
    public $email;
    public $password;
    public static $table = "users";

    private $conn;

    public function __construct($id=null,$name=null,$email=null,$password=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }

    public static function getTable(){
        return self::$table;// để gọi static thì dùng self:: , java: class.
    }

    public function getConn(){
        if(is_null($this->conn)){
            $this->conn = connect();
        }
        return $this->conn;
    }

    public function getUsers(){
        $sql = "SELECT * FROM ".self::getTable();
        $rs = $this->getConn()->query($sql);
        return toArray($rs);
    }

    public function save(){
        $sql_text = "INSERT INTO ".self::getTable()." (id,name,email,pass) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->email."','".$this->password."') ON DUPLICATE KEY UPDATE name = '".$this->name."',email = '".$this->email.
            "', pass = '".$this->password."';";
//        var_dump($sql_text );
//        die();
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }
    public function find($id){
        $sql_text = "SECLECT * FROM ".self::getTable()." WHEN id =".$id;
        $ary =toArray($this->getConn()->query($sql_text));
        if (count($ary)>0){
            $data = $ary[0];
            return new User($data["id"],$data["name"],$data["email"],$data[$this->password]);
        }
        return null;
    }
}