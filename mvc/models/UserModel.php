<?php 
    class UserModel extends DB{
        public function login($username,$password){
            $sql = "SELECT id,username,password FROM manager_account
            where username = '".$username."' and role = 2 and status_id = 1";
            $result = $this->queryOne($sql);
            if($result){
                $password_hashed = password_verify($password,$result['password']);
                if($password_hashed){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        public function register($fullname,$phoneNumber,$username,$password,$email){
            $sql = "INSERT INTO manager_account(email,fullname,phone_number,username,password,role)
            VALUE('".$email."','".$fullname."','".$phoneNumber."','".$username."','".$password."',2)";
            return $this->insert($sql);
        }
    }
?>