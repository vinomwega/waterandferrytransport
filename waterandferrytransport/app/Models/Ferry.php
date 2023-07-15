<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ferry extends Model
{
    use HasFactory;
    protected $table= "ferry";
    protected $primarykey= "id";
    protected $fillable= ['FerryName','capacity','price',];

    public function portoperator(){
        return $this ->hasMany(portoperator::class);
    }
    
}
