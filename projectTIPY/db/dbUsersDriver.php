<!-- 
    Описание методов для работы с базами данных  
-->

<?php 
class dbUsersDriver {
    private $HOST = "localhost";
    private $DB_NAME = "z_users_data";
    private $F_T_NAME = "users";
    
    private $USERNAME = "sdvsik";
    private $PASSWORD = "VwOTxxOwFDROo9IL";    
    private $db;
    
    public function __construct(){  
        $this->db = new PDO(
            "mysql:host=". $this->HOST .";dbname=". $this->DB_NAME,
            $this->USERNAME, $this->PASSWORD
        );
        $this->db->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );
    } // тут всё работает
    
    public function isAccount($login){
        try{
            $queryStr = 'SELECT * FROM '.$this->F_T_NAME.' WHERE login="'.$login.'";';
            $query = $this->db->prepare($queryStr);
            $query->execute();
            if (!empty($query->fetch())){
                return true;
            }   
        }catch(PDOException $e){
            //echo $e->getMessage();
            return false;
        }
        return false;   
    } 
    
    public function isCorrectPass($login, $paswd){     
        if (!$this->isAccount($login)) {
            return false;
        }
        try{
            $queryStr = 'SELECT * FROM '.$this->F_T_NAME.' WHERE login="'.$login.'" AND paswd=MD5("'.$paswd.'");';
            $query = $this->db->prepare($queryStr);
            $query->execute();
            if (!empty($query->fetch())){
                return true;
            }
            return false;
        }catch(PDOException $e){
            //echo $e->getMessage();
            return false;
        }   
    } 
    
    public function getUser($login, $paswd){
        if (!$this->isCorrectPass($login, $paswd)) {
            return null;
        }
        try{
            $queryStr = 'SELECT * FROM '.$this->F_T_NAME.' WHERE login="'.$login.'" AND paswd=MD5("'.$paswd.'");';
            $query = $this->db->prepare($queryStr);
            $query->execute();
            $row = $query->fetch();
            return $row;
        }catch(PDOException $e){
            //echo $e->getMessage();
            return null;
        }
    } 
    
    public function addUser($name, $login, $paswd){
        try{
            $queryStr = "INSERT INTO ".$this->F_T_NAME."(name, login, paswd) VALUES ('".$name."', '".$login."', MD5('".$paswd."')) ;";
            echo $queryStr;
            $this->db->query($queryStr);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            return false;
        }
    } 
    
    public function corUser($login, $paswd, $name){}
    
    public function remUser($login, $paswd){}
    
    public function printAllDataTable(){
        try{
            $c = '-';
            echo '
                <style> 
                    .format {
                        font-family: "Courier new", Courier, monospace;
                    }
                </style>
                ';
            $queryStr = "SELECT * FROM ".$this->F_T_NAME;
            //$queryStr = 'SELECT * FROM '.$this->F_T_NAME.' WHERE login="login" AND paswd=MD5("pass");';
            $query = $this->db->prepare($queryStr);
            $query->execute();
            printf("<p 
                        class='format' 
                        style='
                            font-weight: bold;
                            '> 
                    
                        %'".$c."2s | %'".$c."10s | %'".$c."16s | %'".$c."35s | %'".$c."5s
                    
                    </p><hr><hr>", 'id', 'name', 'login', 'password', 'level');
            while ($row = $query->fetch()){
                printf("
                    <p class='format'>
                        %'".$c."2d | %'".$c."10s | %'".$c."16s | %'".$c."35s | %'".$c."5d 
                    </p><hr>",
                    
                    $row['id'],
                    $row['name'],
                    $row['login'],
                    $row['paswd'],
                    $row['level']
                );
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    } 
    
}

/*
$db = new dbUsersDriver();
$db->printAllDataTable();
*/
?>
