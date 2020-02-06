<?php

class User {
    public $name;
    public $age;
    // Constructor runs when an object is instantiated/created
    public function __construct($name, $age) {
        echo 'Class ' . __CLASS__ . ' instantiated <br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello() {
        return $this->name . ' says hello.';
    }
    // Called when no other references are left to a certain object.
    // Used for cleanup, closing connections, etc.
    public function __destruct() {
        echo 'destructor ran...';
    }
}

$user1 = new User('Brandon', 24);
echo $user1->name . ' is ' . $user1->age . ' years old.';
echo '<br>';
echo $user1->sayHello();
echo '<br>';

$user2 = new User('Kaylee', 23);
echo $user2->name . ' is ' . $user2->age . ' years old.';
echo '<br>';
echo $user2->sayHello();

?>