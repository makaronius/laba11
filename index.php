<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post">
            <input type="text" name="class" placeholder="Введите class">
            <input type="text" name="food" placeholder="Введите food">
            <input type="text" name="location" placeholder="Введите location">
            <input type="submit" name="butt" value="Ввести">
        </form>
    </body>
</html>

<?php
    if(isset($_POST["cr"]))
    { 
        // родительский класс
        abstract class Animal{
            public $food, $location;

            function __construct($food, $location){
                $this->food = $food;
                $this->location = $location;
            }

            abstract function make_noise();
            abstract function eat();
            abstract function sleep();
        }

        // дочерний класс "собака"
        class dog extends Animal{
            public $color;
            
            function __construct($food, $location, $color){
                $this->food = $food;
                $this->location = $location;
                $this->color = $color;
            }

            // голос
            function make_noise(){ 
                echo "<br>"."quack";
            }

            // ест
            function eat(){
                echo "<br>"."dog eating";
            }

            // спит
            function sleep(){
                echo "<br>"."dog sleep";
            }
        }

        // дочерний класс "медведь"
        class cat extends Animal{
            public $size;

            function __construct($food, $location, $size){
                $this->food = $food;
                $this->location = $location;
                $this->size = $size;
            }

            // голос
            function make_noise(){
                echo "<br>"."ummm";
            }
            
            // ест
            function eat(){
                echo "<br>"."cat eating";
            }
            
            function sleep(){
                echo "<br>"."cat sleep";
            }
        }

        // дочерний класс "лошадь"
        class horse extends Animal{
            public $breed;

            function __construct($food, $location, $breed){
                $this->food = $food;
                $this->location = $location;
                $this->breed = $breed;
            }

            // голос
            function make_noise(){
                echo "<br>"."neigh";
            }

            // ест
            function eat(){
                echo "<br>"."horse eating";
            }

            // спит
            function sleep(){
                echo "<br>"."horse sleep";
            }
        }

        // поучение значений
        $class = $_POST["class"];
        $food = $_POST["food"];
        $location = $_POST["location"];
        $third = $_POST["third"];
        
        if($class = 'dog'){
            $object = new dog($food, $location, $third);
            echo "<br>".$object->food;
            echo "<br>".$object->location;
            echo "<br>".$object->color;
        }

        if($class = 'cat'){
            $object = new cat($food, $location, $third);
            echo "<br>".$object->food;
            echo "<br>".$object->location;
            echo "<br>".$object->size;
        }

        if($class = 'horse'){
            $object = new horse($food, $location, $third);
            echo "<br>".$object->food;
            echo "<br>".$object->location;
            echo "<br>".$object->breed;
        }

        $object->make_noise();
        $object->eat();
        $object->sleep();
    }
?>