<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey="bookId";
    protected $fillable=['title','author','publisher','price','bookImage'];

}
