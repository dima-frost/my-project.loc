<?php
$array = [
    'https://itea.ua',
    'https://wikipedia.org',
    'https://taobao.com',
    'https://rozetka.com.ua',
    'https://www.google.com',
    'https://www.amazon.com',
    'https://www.php.net',
    'https://allegro.pl',
    'https://telegram.org',
    'https://www.ebay.com',
    'https://www.mobile.de',
    'https://prom.ua',
    'https://aliexpress.com',
    'https://www.ukr.net',
];
function searchDomain($my_array, $domain){
    $pattern='/.\.' . $domain . '$/';
    $f_array= preg_grep($pattern, $my_array);
    return $f_array;
}

echo '<pre>';
print_r(searchDomain($array, "ua"));
echo '</pre>';
