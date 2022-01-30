<?php

//1th and 2nd task

abstract class StringFunction {

    public function replace($str) {

        return str_replace(" ", "<>",  $str);
    }

    public function firstPosition($str) {
        return $str[0];
    }

    public function stringLength($str) {
        return mb_strlen($str);
    }

}


class Company extends StringFunction{

    public $companyName;

    public function __construct(string $cName)
    {
        $this->companyName = $cName;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

}



class Employee extends Company {

    public $name;
    public $lastName;
    public $position;
    private $password;


    public function __construct(string $name, string $lastName, string $position, string $password, string $cName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->password = md5($password);
        parent::__construct($cName);
    }
}


$worker1 = new Employee("Anton", "Fedorov", "DevOPS", "qwerty12345", "Cisco Systems");


print_r($worker1);

echo "<br>";

print_r($worker1 -> replace($worker1 -> companyName));

echo "<br>";

print_r($worker1 -> firstPosition($worker1 -> name));





echo "<br>";
echo "<br>";
echo "<br>";







//3rd task


abstract class MathData implements Concatenable {

    public $var;

    abstract public function setValue($arg);

    abstract public function getValue();

}




class MathFuctions {

    public $int;
    public $float;

    public function __construct($inInteger, $inFloat) {

        $this->int = $inInteger;
        $this->float = $inFloat;

    }


    public function summ() {
        
        
        return $this->int + $this->float;
    }

    public function diff() {

        return $this->int - $this->float;
    }

    public function multy() {

        return $this->int * $this->float;
    }

    public function div() {

        return $this->int / $this->float;
    }
  
}


class MathInt extends MathData {

    public function setValue($arg) {
        if (is_int($arg)) {
            $this->var = $arg;
        } else {
            return;
        }
        
    }

    public function __construct($arg) {
        $this -> setValue($arg);
    }


    public function getValue() {
        return $this->var;
    }

}

class MathFloat extends MathData {

    

    public function setValue($arg) {
        if (is_float($arg)) {
            $this->var = $arg;
        } else {
            return;
        }
        
    }

    public function __construct($arg) {
        $this -> setValue($arg);
    }


    public function getValue() {
        return $this->var;
    }

}


$newFloat = new MathFloat(11.6);
$newInt = new MathInt(8);


print_r($newFloat);
echo "<br>";
print_r($newInt);

echo "<br>";
echo "<br>";
echo "<br>";



//output on display

$summFunc = new MathFuctions($newFloat->getValue(), $newInt->getValue());
print_r($summFunc->summ());
echo "<br>";

$diffFunc = new MathFuctions($newFloat->getValue(), $newInt->getValue());
print_r($summFunc->diff());
echo "<br>";

$multyFunc = new MathFuctions($newFloat->getValue(), $newInt->getValue());
print_r($summFunc->multy());
echo "<br>";

$divFunc = new MathFuctions($newFloat->getValue(), $newInt->getValue());
print_r($divFunc->div());
echo "<br>";
echo "<br>";
echo "<br>";






interface Concatenable {
    public function getValue();
}




class StringData implements Concatenable {

    public $int;
    public $float;

    public function __construct($inInteger, $inFloat) {

        $this->int = $inInteger;
        $this->float = $inFloat;

    }

    public function getValue() {
        return $this->int . $this->float;
    }
}


$stringyFunc = new StringData($newFloat->getValue(), $newInt->getValue());
print_r($stringyFunc->getValue());
echo "<br>";



