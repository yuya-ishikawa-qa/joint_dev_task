# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
<?php
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names[] = "斎藤";

print_r($names);


echo PHP_EOL;
?>

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
<?php
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];
$array = array_merge($array1, $array2);

print_r($array);
?>
echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
<?php
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$counter = 0;

foreach($numbers as $number) {
  if($number === 3){
    $counter++;
 }
}
print_r($counter . "回".PHP_EOL);
?>

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
<?php
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
$sports = array_diff($sports,[null]);
print_r($sports);
?>

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
<?php
$array1 = [];
var_export(empty($array1));

echo PHP_EOL;

$array2 = [1, 5, 8, 10];
var_export(empty($array2));

?>

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
<?php
$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];
foreach($numbers1 as $number){
    $number *= 10;
    array_push($numbers2,$number);
}
print_r($numbers2);
?>
echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
  <?php
$array = ["1", "2", "3", "4", "5"];
  print_r(array_map('intval', $array));
?>

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
  <?php
$programming_languages = ["php","ruby","python","javascript"];
$programming_languages = array_map('ucfirst',$programming_languages);
$upper_case_programming_languages = array_map('strtoupper',$programming_languages);
  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);
?>
echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  <?php
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names2 = [];
foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);
}
print_r($names2);
?>
echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載
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
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  <?php
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$sports2 = [];
foreach($sports as $key => $sport){
    if(is_array($sport)){
        $sports2 = array_merge($sports2,$sport);
        // is_array $sportが配列なら$sports2と結合
    }else{
        array_push($sports2,$sport);
        // 配列でなければ後ろに追加？
    }
}
$sports2 = array_unique($sports2);
// array_unique　重複を削除
$sports2 = array_values($sports2);
// array_uniqueでキーが飛び飛びになっているのでarray_valuesでキーを振り直す
$sports3 = [];
foreach($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No.".$number." ".$sport;
    array_push($sports3,$sport3);
}

print_r("ユーザの趣味一覧".PHP_EOL);
foreach($sports3 as $sport){
    print($sport.PHP_EOL);
} ?>
echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
  <?php
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];
print_r($data["user"]["name"]);
?>

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
  <?php
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];
  $user_data = $update_data + $user_data;

print_r($user_data);
?>


echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
  <?php
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

$new_data = [];
foreach($data as $one_data){
    array_push($new_data,$one_data);
    // 新しい配列$new_dataを作って、$dataの連想配列の要素を$new_dataに追加する
}

print_r($new_data);
?>

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
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

?>

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
  <?php
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];
// $userをキーに指定して出力
foreach($users as $key => $user){
  echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
}
echo PHP_EOL;
?>

<?php
print("#####q17#####".PHP_EOL);

class User
{
  // プロパティの宣言  User clssで使えるようにする
  protected $name;
  protected $age;
  protected $gender;
  // コンストラクタの記述
  function __construct($user_name,$user_age,$user_gender) {
      $this->name = $user_name;
      $this->age = $user_age;
      $this->gender = $user_gender;
  }
  // info関数の定義
  function info() {
      print("名前:".$this->name.PHP_EOL);
      print("年齢:".$this->age.PHP_EOL);
      print("性別:".$this->gender.PHP_EOL);
  }

}
// コンストラクタの実行
$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");
// 関数infoの実行
$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;
?>

<?php

print("#####q18#####".PHP_EOL);

# コードを追加
class Man
{
  protected $name;
  protected $age;

  function __construct($man_name, $man_age){
      $this->name = $man_name;
      $this->age = $man_age;
  }
  function introduce(){
      if($this->age >= 20) {
          print("こんにちは，".$this->name."と申します。宜しくお願いいたします。".PHP_EOL);
      }else{
          print("はいさいまいど〜，".$this->name."です！！！".PHP_EOL);
      }
  }
}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

?>

<?php
print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

//   protected $name;
    public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい
// protectedではアクセスできない。変更してみたらできたけどなぜ？後回し
$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;
?>

<?php
print("#####q20#####".PHP_EOL);
class Human
{
    public $name;
    public $age;

    function __construct($human_name, $human_age){
        $this->name = $human_name;
        $this->age = $human_age;
    }
  # コードを追加
}

class Zoo
{
  protected $name;
  protected $price;
  function __construct($zoo_name, $zoo_price){
      $this->name = $zoo_name;
      $this->price = $zoo_price;

  }
  function info_entry_fee(Human $human) {
      if($human->age <= 5){
          print($human->name."さんの入場料金は ".$this->price["infant"]." 円です。".PHP_EOL);
      }elseif($human->age <= 12){
          print($human->name."さんの入場料金は ".$this->price["children"]." 円です。".PHP_EOL);
      }elseif($human->age <= 64){
          print($human->name."さんの入場料金は ".$this->price["adult"]." 円です。".PHP_EOL);
      }elseif($human->age <= 120){
          print($human->name."さんの入場料金は ".$this->price["senior"]." 円です。".PHP_EOL);
      }
      // newに合わせる
        # コードを追加
  }
}
$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
?>

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
