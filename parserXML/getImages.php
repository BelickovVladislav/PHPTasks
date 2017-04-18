<?php
header("Content-Type: text/html; charset=utf-8");
/*
 * Сохранить картинки.
 * Изменить ссылку.
 * Удалить HTML теги.
 */
$getString = file_get_contents("rss.xml");
$xml = new SimpleXMLElement($getString);

$index = 0;
foreach ($xml->item as $item) {
    $index++;
    copy($item->picture, 'images/' . $index . '.jpg');
    $item->picture = '/images/' . $index . '.jpg';
}
$xml->saveXML('myRss.xml');
echo '<pre>' . print_r($xml, true) . '</pre>';
