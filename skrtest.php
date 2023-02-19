<?php

$data = 'https://www.livedoor.com/';
$contents = file_get_contents($data);
preg_match("/\"newstopicsbox\"(.*)\-\-\/\#newstopicsbox\-\-/s",$contents,$matches);
echo "soureces";
echo "<br/>";
echo $matches[1];
$contents_2 = $matches[1];
echo "<br/>";
echo "<br/>";

//更に抜き出す
//ヘッドラインタイトルのみを抜き出して$headLineに代入する
preg_match("/rewrite_ab.*href=\"(.*)\" onclick.*主要.*\">(.*)<\/a>\<\/figcaption\>/",$contents_2,$headLine);

echo "<br/>";
echo "Headline";
echo "<br/>";
echo $headLine[2],"\r","<a href="."$headLine[1]".">$headLine[1]</a>";
echo "<br/>";
echo "<br/>";
//タイトルのみを抜き出して配列$titlesに代入する
preg_match_all("/rewrite_ab.*href=\"(.*)\" class.*主要.*\">(.*)<\/a>.*<\/a>.*\<\/li\>/",$contents_2,$titles);
//print_r($title);テスト用
echo "NewsTitle";
echo "<br/>";
//２次元配列$titlesからタイトルとURLだけ抜き出す
$i = 0;
while ($i <= 10){
    echo $titles[2][$i] ,"\r","<a href="."{$titles[1][$i]}".">{$titles[1][$i]}</a>";
    echo "<br/>";
    $i++;
}
?>
