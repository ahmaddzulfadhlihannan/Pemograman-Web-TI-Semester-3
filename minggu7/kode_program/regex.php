<?php
// $pattern = '/[a-z]/';
// $text = 'This is a Sample Text.';
// if(preg_match($pattern, $text)){
//     echo "Huruf kecil ditemukan!";
// } else {
//     echo "Tidak ada huruf kecil!";
// }
// $pattern = '/[0-9]+/';
// $text = 'There are 123 apples.';
// if(preg_match($pattern, $text, $matches)){
//     echo "Cocokkan : " . $matches[0];
// } else {
//     echo "Tidak ada yang cocok!";
// }
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'I like apple pie.';
// $new_text = preg_replace($pattern, $replacement, $text);
// echo "Text sebelum di replace\t:\t" . $text . "<br>";
// echo "Text setalah di replace\t:\t" . $new_text;
$pattern = '/[o]{1,3}/';
$text = 'goood is good, gooood.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

?>