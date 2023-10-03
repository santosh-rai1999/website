<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

   /**
    * Get all of the gallery_images for the Gallery
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function gallery_images()
   {
       return $this->hasMany(GalleryImage::class);
   }
}
