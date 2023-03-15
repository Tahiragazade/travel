<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
	protected $table='travels';

	protected $fillable=['customer_id','start_date','region_id','duration','distance'];

	public function customer()
	{
		return $this->hasOne(Customer::class, 'id', 'customer_id');
	}
	public function region()
	{
		return $this->hasOne(Region::class, 'id', 'region_id');
	}
}
