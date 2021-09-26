<?php
class DP{
    private static function connect_DB(){
        $host = 'localhost';
        $dbname= 'doan_totnghiep';
        $us= 'root';
        $pass ='';
        try{
            $conn=new PDO("mysql:host=$host;dbname=$dbname",$us,$pass,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false,
            PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci" 
            )
        );
        return $conn;
        }
        catch (PDOExecption $e){
            echo '<script> alert("Error:'.$e->getMessage().'");</script>';
            return null;
        }
    }
    // phương thức dữ liệu truyền vào cua tham số
    private static function get_type($var){
        switch (gettype($var)){
            case 'interger': return PDO::PARAM_INT;
            case 'boolean': return PDO::PARAM_BOOL;
            case 'NULL': return PDO::PARAM_NULL;
            default: return PDO::PARAM_STR;
        }
    }
    public static function search($search)
    {
        $con = DP::connect_DB();
        $sql="select * from SANPHAM where tieude like N'%$search%'";
        $result= $con->prepare($sql);
        $result->execute();
        $rowsdata=$result->fetchALL();
        return $rowsdata;
    }
    // phương thức thực thi truy vấn
    public static function run_query($query,$paras,$type){
        try{
            $con = DP::connect_DB();
            $h=$con->prepare($query);
            foreach($paras as $key=>$para){
                $h->bindValue($key+1,$para,DP::get_type($para));
            }
            $h->execute();
            //var_dump($h);
            $result;
            switch($type){
                case 1: $result =true; break;// câu truy vấn của ins,upd,dete
                case 2: $result =$h->fetchALL();break;//select
                case 3: $result = $con->lastInsertID();break;// insert mã tăng
            }
            $con= NULL;
            return $result;
        }catch (PDOExecption $e){
                echo '<script> alert("Error:'.$e->getMessage().'");</script>';
                return null;
            }    
        }
}
?>