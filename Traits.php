<?php 
trait hello {
    public function sayhello(){
        echo "hello everyone";

    }
}


trait bye {
    public function saybye(){
        echo "bye bye everyone";

    }
}

class base {
    use hello , bye;

}

class base1 {
    use hello;

}

$test = new base(10);
// $test1 = new base1();

$test -> sayhello();
echo "<br>";
$test -> saybye();


// $test1 -> sayhello();





?>