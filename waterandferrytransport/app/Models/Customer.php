<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table= "customer";
    protected $primarykey= "id";
    protected $fillable= ['Passanger_Name','Organization_Name','Location','Date','Payment'];

    public function booking(){
        return $this ->hasMany(booking::class);
    }
    
}
