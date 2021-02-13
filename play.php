<?php
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];
foreach($foods as $food){
  if(preg_match('/うに/',$food)){
   print("好物です"."\n");
  }else{
   print ("まぁまぁ好きです"."\n");
  }
}
?>

<?php
foreach($foods as $food){
    if(preg_match('/うに/',$food)){
        print('好物です'.PHP_EOL);
    }else{
        print('まぁまぁ好きです'.PHP_EOL);
    }
}
?>
