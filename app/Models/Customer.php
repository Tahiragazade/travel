<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

	protected $fillable=['name','surname','age','gender','phone','car_id','car_year','car_color_id'];

	protected $appends=[
		'last_region',
		'total_duration',
		'total_distance'
	];
	public function car()
	{
		return $this->hasOne(Car::class, 'id', 'car_id');
	}
	public function getLastRegionAttribute()
	{
		$region=Travel::where('customer_id',$this->id)->orderBy('id','DESC')->first();
		return $region->region->name??'';
	}
	public function getTotalDurationAttribute()
	{
		$total_duration=DB::table('travels')->where('customer_id',$this->id)->sum('duration');
		return $total_duration;
	}
	public function getTotalDistanceAttribute()
	{
		$total_distance=DB::table('travels')->where('customer_id',$this->id)->sum('distance');
		return $total_distance;
	}
}
