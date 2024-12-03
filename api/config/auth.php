<?php
class Auth {
    private $secret_key = "your_jwt_secret";
    
    public function generateToken($user_id, $username) {
        $payload = array(
            "user_id" => $user_id,
            "username" => $username,
            "exp" => time() + 3600
        );
        return JWT::encode($payload, $this->secret_key);
    }

    public function validateToken($token) {
        try {
            return JWT::decode($token, $this->secret_key, array('HS256'));
        } catch(Exception $e) {
            return false;
        }
    }
}
