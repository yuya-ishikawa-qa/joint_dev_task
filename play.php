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
