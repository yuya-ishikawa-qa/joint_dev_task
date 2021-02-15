 <?php
 $data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];

 if( array_key_exists('age',$data1) ) {
     print('OK'.PHP_EOL);
 } else {
     print('NG'.PHP_EOL);
 }
 // array_key_exists 指定したキーまたは、添字が配列に存在するか調べる

 $data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];
 if( array_key_exists('age' ,$data2) ){
     print('OK'.PHP_EOL);
 } else {
     print('NG'.PHP_EOL);
 }

 print_r($new_data);
 ?>
