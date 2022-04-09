<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
  public static  function index() 
  {
      $abc=" welcome";
      return $abc; 
  }
}
