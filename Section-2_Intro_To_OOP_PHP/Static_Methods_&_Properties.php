<?php 

    class User {
        public $name;
        public $age;
        public static $minPassLength = 6;

        public static function validatePass($password) {
            if(strlen($password) >= self::$minPassLength) {
                return true;
            } else {
                return false;
            }
        }
    }

    $password = 'hello123';

    if(User::validatePass($password)) {
        echo 'Password Valid';
    } else {
        echo 'Password NOT Valid';
    }

?>