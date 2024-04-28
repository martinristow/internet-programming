<?php 
class User{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function create($name , $username , $email , $password){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, username , email , password) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("ssss",$name , $username, $email, $hashed_password);
        
        $result = $stmt->execute();

        if($result){
            $_SESSION['user_id'] = $result->insert_id;//znaci deka ke napravime sesija od ovoj nov
            //registriran korisnik za da moze on da bide najaven 
            return true;
        }else {
            return false;
        }

    }


    //FUNKCIJA ZA LOGIN SISTEM
    public function login($username, $password){
        $sql = "SELECT user_id, password FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s",$username);
        $stmt->execute();

        $results = $stmt->get_result();

        if($results->num_rows == 1){
            $user = $results->fetch_assoc();

            if(password_verify($password,$user['password'])){//tuka prviot password e nie toj password 
                //sto sme go vnele a drugiot $user['password'] ni e passwordot od bazata 
                $_SESSION['user_id'] = $user['user_id'];

                return true;
            }
        }
        return false;

    }
    //TUKA ZAVRSUVA OVAA FUNKCIJA NA LOGIN


    //METODA ZA PROVERKA DALI E NAJAVEN USEROT
    public function is_logged(){
        if(isset($_SESSION['user_id'])){
            return true;
        }
        return false;
    }
    //TUKA ZAVRSUVA OVAA METODA/FUNKCIJA 



    //FUNKCIJA KOJA KE PROVERUVA DALI KORISNIKOT E ADMIN
    public function is_admin(){
        $sql = "SELECT * FROM users WHERE user_id = ? AND is_admin = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION['user_id']);//proveruvame dali najaveniot korisnik go ima vo bazata i dali istitot e admin
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            return true;
        }

        return false;
    }



    //FUNKCIJA ZA LOGOUT
    public function logout(){
        unset($_SESSION['user_id']);
    }
}

?>