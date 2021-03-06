<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */
include_once "functions.php"; //functions.php deki fonksiyonlar kullanilmak uzere 1 kez dahil edilir.
//isset() deger kontrolu
if(!isset($id)) $id=1;
if(!isset($type)) $type="warning";
if(!isset($title)) $title="Hello World";
//Renklendirme kontrolu
if($type=="urgent") $color="#f00";     //kirmizi
elseif($type=="warning") $color="#ff0";//sari
else $color="#fff";                    //default
//div type degerine gore arkaplan rengi alir.
echo "<div style ='background-color:". $color." ;'>";
  getPostDetails($id,$title); //getPostDetails() tetiklenir.
echo "</div>";
