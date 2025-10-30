<?php 
trait hello {
    public function sayhello(){
        echo "hello everyone\n";

    }
    public function sayhi(){
        echo "hi everyone\n";

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
$test -> sayhi();
echo "<br>";
$test -> saybye();


// $test1 -> sayhello();





?>