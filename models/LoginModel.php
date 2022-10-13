<?php



class LoginModel extends Model {

    function login($arrayRequest){
      
        $userEmail =$arrayRequest['user'];
        $password =$arrayRequest['password'];
        list($nameEmail,$extensionEmail) = explode("@", $userEmail);
        $login = $this->database->connect()->
        prepare(
        "SELECT u.user_password,m.email
        FROM users u 
        JOIN  members m
        ON u.id=m.id
        WHERE u.user_password=$password AND m.email LIKE '$nameEmail%$extensionEmail';");

        try{
            $login -> execute();
            $loginInfo = $login -> fetch();

            if(isset($loginInfo['user_password']) && isset($loginInfo['email'] )){

                $_SESSION['user'] = $loginInfo['email'];
                return $_SESSION;
        
            }
        }catch(PDOException $error){
            return [false, $error];
        }

    }
} 
















































 
