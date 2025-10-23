<?php
namespace App\Models;

class Trainee{
     public static $trainee =[
        [
          'name'=>"Sohel Rana",
          'email'=> "sohel@gmail.com",
          'phone'=>"01548574252",
          'country'=>"BD",
          "is_active"=> true,
          'id'=>1
        ],
        [
          'name'=>"Rahat Rana",
          'email'=> "Rahat@gmail.com",
          'phone'=>"01548574252",
          'country'=>"USA",
          "is_active"=> false,
          'id'=>2
        ],
        [
          'name'=>"Roxi Rana",
          'email'=> "Roxi@gmail.com",
          'phone'=>"01548574252",
          'country'=>"UK",
          "is_active"=> true,
          'id'=>3
        ]
    ];
    public static function all(){
     return self::$trainee;
    }
    public static function readById($id){
     return collect(self::$trainee)->firstWhere('id',$id);
    }

}


?>