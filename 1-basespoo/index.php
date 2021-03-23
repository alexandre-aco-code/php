<?php 

class User {

    public static $COUNT = 0;

    //propriétés
    public $firstname;
    public $lastname;
    
    // méthodes 
    public function __construct( $firstname , $lastname ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        self::$COUNT ++;

    }

    public function sayHello() {
        echo "je suis {$this->firstname} {$this->lastname} <br>";
    }
}

class Student extends User {
    public $school;
    public $QI;

    public function study() {
        $this->QI ++;
    }
    
    public function sayHello() {
        parent::sayHello();
        echo "j'étudie à la {$this->school}";
    }

    public function __construct( $firstname , $lastname ) {
        parent::__construct($firstname, $lastname);
        $this->school = "3WA";
    }
    
}

$user = new User('Dany','Toto');
$user->sayHello();

$student = new Student('Toto', 'ring');
$student->sayHello();

var_dump("<br>". User::$COUNT);
var_dump("<br>". User::$COUNT);

?>