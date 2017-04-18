<?php
header("Content-Type: text/html; charset=utf-8");
/*
 *  Спарсить 10 последних новостей с  rss https://realt.onliner.by/
 */
function deleteSpecialSymbols($str){
    $str = str_replace("Читать далее…",'',strip_tags($str));
       $str = preg_replace("[&nbsp;]"," ",$str);
    return $str;
}
$xml = simplexml_load_file('https://realt.onliner.by/feed');
//$xml = new SimpleXMLIterator($xml->__toString());
$addFile = array();

for ($i = 0; $i < 10; $i++) {
    $item = $xml->channel->item[$i];
//    $nameSpaces = $xml->getNamespaces(true);
    $child = $item->children("media", true);
    $thumbnail = $child[0]->attributes();
//    echo '<pre>' .print_r($child, true). '</pre>';
    $addFile[$i]['title'] =deleteSpecialSymbols($item->title);
    $addFile[$i]['picture'] = deleteSpecialSymbols($thumbnail['url']);
    $addFile[$i]['link'] = deleteSpecialSymbols($item->link);
    $addFile[$i]['description'] = deleteSpecialSymbols($item->description);
    $addFile[$i]['pubDate'] = deleteSpecialSymbols($item->pubDate);
}
//echo '<pre>' .print_r($addFile, true). '</pre>';
$myXMl = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\t<news>\n";
echo '<div class="news">';
foreach ($addFile as $item) {
    $myXMl .= "\t\t<item>\n";
    foreach (array_keys($item) as $key) {
        $myXMl .= "\t\t\t<$key>" . $item[$key] . "</$key>\n";
    }
    $myXMl .= "\t\t</item>\n";

    echo '<div class="new">';
    echo '<h2 class="title">' . $item['title'] . '</h2>';
    echo '<div class = "pubDate">' . $item['pubDate'] . '</div>';
    echo '<div class = "description">' . $item['description'] . '</div>';
    echo '</div>';
}
$myXMl .= "\t</news>";
echo '</div>';
file_put_contents('rss.xml', $myXMl, FILE_TEXT);