<?php


namespace App\ImageClasses;


 use App\ImageClasses\Images\Image;

 abstract class Effect
{
     public abstract static function handle(Image $image);
}
