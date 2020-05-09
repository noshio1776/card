<?php
class Animals{
  private $name;
  private $img;

  public function __construct($name,$img){
    $this->name=$name;
    $this->img=$img;
  }

  public function getName(){
    return $this->name;
  }
  public function getImg(){
    return $this->img;
  }
}
$rabbit =new Animals('ウサギ','./img/animal1.jpg');
$fox=new Animals('キツネ','./img/animal2.jpg');
$lion=new Animals('ライオン','./img/animal3.jpg');
$sheep=new Animals('ヒツジ','./img/animal4.jpg');
$suigyu=new Animals('スイギュウ','./img/animal5.jpg');
$chiter=new Animals('チーター','./img/animal6.jpg');
$namakemono=new Animals('ナマケモノ','./img/animal7.jpg');
$kawauso=new Animals('カワウソ','./img/animal8.jpg');
$kujaku=new Animals('クジャク','./img/animal9.jpg');
$giraffe=new Animals('キリン','./img/animal10.jpg');
$hippo=new Animals('カバ','./img/animal11.jpg');
$alpaka=new Animals('アルパカ','./img/animal12.jpg');
$gorilla=new Animals('ゴリラ','./img/animal13.jpg');



$items=[$rabbit,$fox,$lion,$sheep,$suigyu,$chiter,$namakemono,$kawauso,$kujaku,$giraffe,$hippo,$alpaka,$gorilla];
?>