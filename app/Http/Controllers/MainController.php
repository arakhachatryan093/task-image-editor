<?php

namespace App\Http\Controllers;

use App\ImageClasses\Effect;
use App\ImageClasses\Images\Image;
use Illuminate\Http\Request;

class MainController extends Controller
{

   public function browseImage(){
      //upload image
      // return $image_name;
   }

   public function applyEffect(Request $request){
       //apply effect
       //call image->addEffect
       //return image->getImage
   }
}
