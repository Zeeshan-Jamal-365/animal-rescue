<?php
include('simple_html_dom.php');

$websiteurl = "https://www.palmbeachcodeschool.com/news/";
$html = file_get_html($websiteurl);

$urls = array();
foreach ($html->find('.et_pb_section') as $postdiv) {
    foreach ($postdiv->find('a') as $a) {
        $urls[] = $a->attr['href'];
    }
}
