<?php

class Person
{
    public string $name;
    public int $age;
    public string $bio = "";

    // creating a constructor  
    public function __construct(string $name, int $age,)
    // long form 
    {
        $this->name = $name;
        $this->age = $age;
    }

    // constructor shortcut with definiton of properties inside the constructure   

    // public function __construct(
    //     public string $name, public int $age 
    // )
    // {
    //  // do extra here  
    // } 

    public function introduce(): string
    {
        return "Hi, im {$this->name} and I'm {$this->age}years old";
    }
}

$alice = new Person("gearld", 12, "asfasdfasdf ");
$alice->introduce();

// extending a class 

class Employee extends Person
{

    public string $position;
    public int $age;
    public string $name;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function introduce(): string
    {
        return parent::introduce() . "I workd as a {$this->position}";
    }
}

$employee = new Employee("Gerald", 36, "full stack developer");
echo $employee->introduce();
