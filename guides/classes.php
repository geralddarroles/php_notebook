<?php
// PHP Classes can only have one constructor. 

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

    // constructor shortcut with definition of properties inside the constructor 
    // Shortened version of a constructor 
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

    public function getName(): int
    {
        return $this->name;
    }
}

$alice = new Person("Dude perfect", 12, "Programmer");
$alice->introduce();

// extending a class 
// No need to redefine inherited properties, but you can override them. 
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
        return parent::introduce() . "I work as a {$this->position}";
    }
    #[Override]
    public function  getName(): int
    # can omit superclass function i.e. parent::getName() 
    {
        return "My name is {$this->name} and I am {$this->age} years old";
    }
}

$employee = new Employee("Dude imperfect", 12, "full stack developer");
echo $employee->introduce();
