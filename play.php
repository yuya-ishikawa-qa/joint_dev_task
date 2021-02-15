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
// array_uniqueで飛び飛びになっているのでarray_valuesでキーを降り直す
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
