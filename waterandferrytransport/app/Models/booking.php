<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'Ferry_Id', 'Customer_Id', 'CapacityBooked',
    ];

    public function ferry()
    {
        return $this->belongsTo(Ferry::class, 'ferry_Id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_Id');
    }
}


// previous booking model//
/*namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table= "booking";
    protected $primarykey= "id";
    protected $fillable= ['Ferry_Id','Customer_Id','CapacityBooked',];

    public function ferry(){
        return $this ->hasMany(ferry::class);
    }

    public function customer(){
        return $this ->belongsTo(customer::class);
    }

    public function system(){
        return $this ->belongsTo(system::class);
    }

}
*/