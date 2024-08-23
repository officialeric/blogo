<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

     // Specify the table if it doesn't follow Laravel's naming convention
     protected $table = 'posts';

     // Specify the fillable attributes
     protected $fillable = [
         'title',
         'body',
         'image',
         'author_id',
     ];
 
     // Optionally specify attributes that should be cast to specific data types
     protected $casts = [
         'created_at' => 'datetime',
         'updated_at' => 'datetime',
     ];

     public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

}
