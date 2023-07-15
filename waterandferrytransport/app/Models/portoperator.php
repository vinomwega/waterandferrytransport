<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portoperator extends Model
{
    use HasFactory;
    protected $table= "portoperator";
    protected $primarykey= "id";
    protected $fillable= ['ferry_id','FerryName','Date','Availability','Payment'];

    public function ferry(){
        return $this ->belongsTo(ferry::class);
    }
    
}
