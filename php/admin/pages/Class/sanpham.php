<?php

class Sanpham
{
  private $ten;
  private $sl;
  private $gia;
  private $giamgia;
  private $trangthai;
  private $hot;
  private $image;
  private $mota;
  private $danhmuc;
 
 
  
//   public function __construct()
//   {
      
//   }
   

  public function  __construct($ten,$sl,$gia,$giamgia,
  $trangthai,$hot,$image,$mota,$danhmuc)
  {
  
    $this->ten =$ten;
    $this->sl=$sl;
    $this->gia=$gia;
      
    $this->giamgia =$giamgia;
    $this->trangthai=$trangthai;
    $this->hot=$hot;
      
    $this->image =$image;
    $this->mota=$mota;
    $this->danhmuc=$danhmuc;

  }
 
  public function getTen()
  {
    return $this->ten;
  }
 
  public function getGia()
  {
    return $this->gia;
  }
 
  public function getGiamGia()
  {
    return $this->giamgia;
  }
  public function getSl()
  {
    return $this->sl;
  }
 
  public function getTrangThai()
  {
    return $this->trangthai;
  }
 
  public function getHot()
  {
    return $this->hot;
  }

  public function getImage()
  {
    return $this->image;
  }
 
  public function getMota()
  {
    return $this->mota;
  }
 
  public function getDanhMuc()
  {
    return $this->danhmuc;
  }

  public function getName()
  {
    return $this->name;
  }
 
  public function setTen($name)
  {
    $this->ten = $name;
  }
  public function setSl($name)
  {
    $this->sl = $name;
  }
  public function setGia($name)
  {
    $this->gia = $name;
  }
  public function setGiamGia($name)
  {
    $this->giamgia = $name;
  }
  public function setTrangThai($name)
  {
    $this->trangthai = $name;
  }
  public function setHot($name)
  {
    $this->hot = $name;
  }
  public function setMota($name)
  {
    $this->mota = $name;
  }
  public function setDanhmuc($name)
  {
    $this->danhmuc = $name;
  }
  public function setImage($name)
  {
    $this->image = $name;
  }
  
}
?>