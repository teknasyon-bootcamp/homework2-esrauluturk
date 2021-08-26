<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */
include_once "functions.php"; //functions.php de yer alan fonksiyonlari kullanmak icin 1 kez dahil edilir.
$randomPostNumber=getRandomPostCount(5,10);//random olarak bir sayi elde ederiz.
$posts=getLatestPosts($randomPostNumber);//elde edilen random sayi ile getLatestPosts() calistirilir,bir dizi elde ederiz.
foreach ($posts as $id=> $value){
    $type= $value["type"];   
    print($id." --> Title: ".$value["title"]." |  Type: ".$value["type"].'<br>'); //her yazi icin detaylar gosterilir.
    include "post.php";     //1+ kez post.php dahil edilir.
}

