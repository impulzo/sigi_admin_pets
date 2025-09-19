<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

	protected $fillable = [
		'user_id',
		'service_id',
		'payment_method_id',
		'amount',
		'service_unit',
		'date',
		'customer_id',
		'pet_id',
		'concepts',
	];

	public function service()
	{
		return $this->belongsTo(Service::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function pet()
	{
		return $this->belongsTo(Pet::class);
	}

}
