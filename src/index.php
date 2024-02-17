<?php

class UserData{
    public $name;
    public $age;
    public $montlyWage;
        
    public function __construct($name, $age, $montlyWage){
        $this->name = $name;
        $this->age = $age;
        $this->montlyWage = $montlyWage;
    }

    public function showInformation(){
        print $this->name.", ".$this->age." anos, "." montly income: ".$this->montlyWage . "\n";
    }

    public function clearObjects(){
        $this->name = NULL;
        $this->age = NULL;
        $this->montlyWage = NULL;
    }
}

$newUser = array();
$option = 0;
$index = 0;

while ($option != 3){
    echo "Menu\n[1]Insert user data\n[2]Show all data\n[3]End programm\n";
    $option = intval(fgets(STDIN));
    switch ($option){
        case 1: 
            echo "name:";
            $name = trim(fgets(STDIN));
            echo "Age:";
            $age = intval(trim(fgets(STDIN)));
            echo "Montly Income:";
            $montlyWage = floatval(trim(fgets(STDIN)));
            $newUser[$index] = new UserData($name, $age, $montlyWage);
            $index++;
            break;
        case 2: 
            if ($index == 0){
                echo "Nothing to show";
                break;
            } 
            foreach ($newUser as $user) {
                $user->showInformation();
            }
            break; 
        case 3:
            foreach ($newUser as $user) {
                $user->clearObjects();
            }            
            echo "Data erased successfully!";
            break;
    }
}


