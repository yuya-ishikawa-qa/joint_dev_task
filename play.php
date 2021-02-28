 <?php
print("#####q21#####".PHP_EOL);
for($i=1 ; $i < 31 ; $i++) {
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz".PHP_EOL;
    }elseif($i % 3 == 0 && $i % 7 == 0){
        echo "FizzHoge".PHP_EOL;
    }elseif($i % 3 == 0){
        echo "Fizz".PHP_EOL;
    }elseif($i % 5 == 0){
        echo "Buzz".PHP_EOL;
    }elseif($i % 7 == 0){
        echo "Hoge".PHP_EOL;
    }else{
        echo $i.PHP_EOL;
    }

}


echo PHP_EOL;
?>
