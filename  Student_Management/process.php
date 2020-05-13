<?php
//lay du lieu tu db
function connect(){

    $host = "localhost";
    $userDB = "root";
    $passDB = "root";
    $dbName = "t1907m";
    $conn = new mysqli($host, $userDB, $passDB, $dbName);
    if ($conn->connect_error) {
        die("Khong ket noi vs db duoc");

    }
    return $conn;
}

function getAll($table){
    $conn = connect();
    //nếu connect thì code chạy tiếp bên dưới
    //echo "connected successfully";
    //Câu lệnh sql
    $sql_text = "SELECT * FROM ".$table;

    //gan bien result
    $result = $conn -> query($sql_text);
    //var_dump($result);
    $data = [];
    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}
function toArray($rs){
    $data =[];
    if ($rs->num_rows >0){
        while ($row = $rs->fetch_assoc()){
            $data [] =$row;
        }
    }
    return $data;
}

// class students + constructer

class User
{
    public $id;
    public $name;
    public $age;
    public $mark;
    public $Street;
    public $dateofbirth;


    public static $table = "student";

    public static $twotable = "users";
    private $conn;

    public function __construct($id = null, $name = null, $age = null, $mark = null,$Street = null, $dateofbirth = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->mark = $mark;
        $this->Street=$Street;
        $this->dateofbirth=$dateofbirth;
//        $this->password = md5($password);
    }

    public static function getTable()
    {
        return self::$table;// để gọi static thì dùng self:: , java: class.
    }
    public static function getTable2()
    {
        return self::$twotable;// để gọi static thì dùng self:: , java: class.
    }
    public function getConn()
    {
        if (is_null($this->conn)) {
            $this->conn = connect();
        }
        return $this->conn;
    }

    public function getStudent(){
        $sql = "SELECT * FROM ".self::getTable();
        $rs = $this->getConn()->query($sql);
        return toArray($rs);
    }

    public function getUser(){
        $sql = "SELECT * FROM ".self::getTable2();
        $rs = $this->getConn()->query($sql);
        return toArray($rs);
    }

    public function save(){
        $sql_text = "INSERT INTO ".self::getTable()." (id,name,age,mark,Street,datofbirth) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->age."','".$this->Street."','".$this->mark."','".$this->Street."','".$this->dateofbirth."') ON DUPLICATE KEY UPDATE name = '".$this->name."',age = '".$this->age.
            "', mark = '".$this->mark."',Street = '".$this->Street."',dateofbirth = '".$this->da."';";
//        var_dump($sql_text );
//        die();
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }
}
//post
if(count($_POST) > 0):
// nhan thong tin tu form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];
    $Street =$_POST['Street'];
    $dateofbirth = $_POST['dateofbirth'];

    // insert to table
    $user = new \assignment1\User(null,$name,$age,$mark,$Street,$dateofbirth);
    $user->save();
    header("Location: List_Student.php");
endif;


