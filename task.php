<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

$names = ["田中", "佐藤", "佐々木", "高橋"];

array_push($names,"斎藤");
print_r($names);

print PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載


$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array = array_merge($array1,$array2);

print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

  # 以下に回答を記載

$numbers = [1,5,8,10,2,3,2,3,1,4,5,9];

$count = 0;

foreach($numbers as $number) {
  if($number == 3){
    $count++;
  }
}

print_r($count. "回");

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載

$sports = ["サッカー", "フットサル", "null", "野球", "バスケ", "null", "バレー"];

$sports = array_diff($sports,array("null"));

print_r($sports);
echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
$array1 = [];
var_export(empty($array1));
echo PHP_EOL;

$array2 = [1,5,8,10];
var_export(empty($array2));
echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1,2,3,4,5];

$numbers2 = [];

foreach($numbers1 as $number){
  $number *= 10;
  array_push($numbers2,$number);
}
print_r($numbers2);

print("#####q7#####".PHP_EOL);
//Q7. 次の配列の要素を 文字列 から 数字 に変換し，出力して下さい
$array = ["1","2","3","4","5"];

$array = array_map('intval',$array);

var_dump($array);

print PHP_EOL;

print("#####q8#####".PHP_EOL);

$programming_languages = ["php", "ruby", "python", "javascript"];
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);

$names = ["田中", "佐藤", "佐々木","高橋"];

$names2 = [];

foreach ($names as $key => $name){
  $number = $key + 1;
  $name2 = "会員No.".$number."".$name;
  array_push($names2,$name2);
}
print_r($names2);

echo PHP_EOL;

// $names = ["田中", "佐藤", "佐々木","高橋"];

// $names2 = [];

// foreach ($names as $key => $name){
//   $name2 = "会員No.".$key.$name;
//   $names2 = $name2;
// }
// print_r($names2);

// echo PHP_EOL;
//上の場合1番だとまず、この$keyがこれだと0から表示になるので
//変数を指定する、あともう一つが配列に値を入れる形にするため
//array_pushで値をくっつける形をとる
//最後に気をつけるのが$keyと$nameの間が空いてるので気をつける

print("#####q10#####".PHP_EOL);

$foods =["いか", "たこ","うに","しゃけ","うにぎり","うに軍艦","うに軍艦","うに丼","高級なうに"];

foreach ($foods as $food){
  if (preg_match("/うに/",$food)){
    print("好物です" .PHP_EOL);
  }else{
    print("まぁまぁ好きです" . PHP_EOL);
  }
}

print("#####q11#####".PHP_EOL);

$sports = ["サッカー","バスケ","野球",["フットサル","野球"],"水泳","ハンドボール",["卓球","サッカー","ボルダリング"]];

$sports2 = [];
foreach ($sports as $key => $sport) {
  if (is_array($sport)){
    $sports2 = array_merge($sports2,$sport); //$sports2に$sportを結合
   }else{
    array_push($sports2,$sport);//$sports2に$sportを追加 これがないと[[]]の中の値しか出力されなくなる
  }
  
  $sports2 = array_unique($sports2);
  $sports2 = array_values($sports2); //これがないとNo8が飛ばされてNo9となる
  
  $sports3 = [];
  foreach ($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No".$number." ".$sport;
    array_push($sports3,$sport3); //最後foreach文で$sportにしないとエラーになる
  }
}

print_r("ユーザの趣味一覧".PHP_EOL); //foreach文はしっかり括弧外ですること 二重になって7つ表示されてしまってた
  foreach ($sports3 as $sport) {
    print($sport . PHP_EOL);
}
print("#####q12#####".PHP_EOL);

$data = ["user" => ["name" => "satou", "age" => 33]];
print_r($data["user"]["name"]);

print  PHP_EOL;

print("#####q13#####".PHP_EOL);

$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

$user_data = $update_data + $user_data ; //同じ値なら上書きができるから

print_r($user_data);

echo PHP_EOL;

print("#####q14#####".PHP_EOL);

$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

$datas = [];

foreach($data as $datas2){
  array_push($datas,$datas2);
}
print_r($datas);
echo PHP_EOL;

print("#####q15#####".PHP_EOL);

$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
# 実行結果 OK

$data2 = ["name" => "yamada", "body" => "baseball", "role" => "normal"];

if (array_key_exists('age',$data1)) {
  print('OK' .PHP_EOL);
}else{
  print('NG' .PHP_EOL);
}

if (array_key_exists('age',$data2)) {
  print('OK' .PHP_EOL);
}else{
  print('NG' .PHP_EOL);
}
echo PHP_EOL;

print("#####q16#####".PHP_EOL);

$users = [
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
  ];
  
  foreach($users as $key => $user){
    print "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
  }
  echo PHP_EOL;
  

