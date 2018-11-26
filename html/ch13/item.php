<?php 
// ex. poring card
//O:4:"Item":4:{s:2:"id";s:4:"I001";s:4:"name";s:11:"Poring Card";s:11:"description";s:25:"LUK + 2,Perfect Dodge + 1";s:5:"price";i:10;}
//ex2 
//O:4:"Item":4:{s:2:"id";s:4:"I002";s:4:"name";s:9:"Pupa Card";s:11:"description";s:16:"Maximum HP + 700";s:5:"price";i:10;}
//ex3
//O:4:"Item":4:{s:2:"id";s:4:"I003";s:4:"name";s:12:"Lunatic Card";s:11:"description";s:45:"LUK + 1, Critical Rate + 1, Perfect Dodge + 1";s:5:"price";i:10;}
class Item {
  public $id = "I003";
  public $name = "Lunatic Card";
  public $description = "LUK + 1, Critical Rate + 1, Perfect Dodge + 1";
  public $price = 10;

  function __destruct(){
    if(!file_exists("inventory/" . $this->id)){
      file_put_contents("inventory/" . $this->id,
      "Name: ". $this->name ."\n".
      "Description: ". $this->description ."\n". 
      "price: ". $this->price);
      echo "<script>alert('Redeem success.')</script>";
    }else{
      echo "<script>alert('This code is already used.')</script>";
    }
  }
}
// $obj = new Item;
// $a = serialize($obj);
// echo "Example of an object:\n$a\n\n";

?>