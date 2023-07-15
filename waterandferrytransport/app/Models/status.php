<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $table= "status";
    protected $primarykey= "id";
    protected $fillable= ['status'];

    public function system(){
        return $this ->belongsTo(system::class);
    }
    
}
