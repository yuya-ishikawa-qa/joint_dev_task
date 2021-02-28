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
