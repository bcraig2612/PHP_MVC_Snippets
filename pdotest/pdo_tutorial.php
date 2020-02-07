<?php 

    $host = 'localhost';
    
    $user = 'root';
    
    $password = '';
    
    $dbname = 'pdotest';

    // Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    // Create A PDO Instance
    $pdo = new PDO($dsn, $user, $password);
   
    // Setting Default Mode Attribute To An Object Rather Than An Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // ****** SELECTING DATA ******

    $status = 'admin';

    // :status is considered using a 'name parameter'
    // ? you can also use the question mark and use 'positional parameters'
    $sql = 'SELECT * FROM users WHERE status = :status';
    
    $stmt = $pdo->prepare($sql);
   
    $stmt->execute(['status' => $status]);
    
    // *** Using Associative Array ***
    // $users = $stmt->fetchAll();

    // *** Using Object Before Setting It As Default ***
    // $users = $stmt->fetchAll(PDO::FETCH_OBJ);

    // *** After Setting Object As Default ***
    $users = $stmt->fetchAll();

    foreach($users as $user) {
        // *** Using Associative Array ***
        // echo $user['name'] . '<br>';
       
        // *** Using Object Before Setting It As Default ***
        // echo $user->name . '<br>';
        
        // *** After Setting Object As Default ***
        echo $user->name . '<br>';
    }

      // ****** INSERTING DATA ******

      $name = 'Chris Goettl';
      $email = 'chris@scrapbook.com';
      $status = 'guest';

      $sql = 'INSERT INTO users(name, email, status) 
              VALUES(:name, :email, :status)';

      $stmt = $pdo->prepare($sql);

      $stmt->execute([ 'name' => $name, 'email' => $email, 'status' => $status ]);

      echo 'Added User To Users Table!';

?>