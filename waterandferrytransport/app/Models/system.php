<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class system extends Model
{
    use HasFactory;
    protected $table= "system";
    protected $primarykey= "id";
    protected $fillable= ['status_id','Booking_Id'];

    public function status(){
        return $this ->hasMany(status::class);
    }
    
    public function booking(){
        return $this ->hasMany(booking::class);
    }
}
