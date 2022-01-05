<?php


namespace App\ImageClasses\Images;

class Image
{
   protected $image;
   protected $effects = [];

   public function __construct($image_name){
       if(file_exists($image_name)){
           $this->image = $image_name;
       }
   }

   public function getRaw(){
       return $this->image;
   }

   public function addEffect($effect){
       if (class_exists("\\App\\ImageClasses\\Effects\\$effect")){
           $this->effects[$effect] = "\\App\\ImageClasses\\Effects\\$effect";
       }
   }
   public function getImage(){
       foreach ($this->effects as $effect){
          $this->image =  $effect::handle($this->image);
       }
       return $this->image;
   }
}
