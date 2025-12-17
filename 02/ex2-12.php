<?php      
    class member1{
        public $name;
        public $age;
        
        public function __construct($name,$age){
            $this ->name = $name;
            $this ->age = $age;
        }
        


        public function intro(){
            echo "이름:".$this -> name."나이:".$this -> age;
        }

    }

    $c = new member1("서정진",25);
    


    echo $c -> intro();




?>