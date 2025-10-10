<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

	public function receipts()
	{
		return $this->belongsToMany(Receipt::class, 'receipt_service', 'service_id', 'receipt_id')
			->withPivot('service_unit')
			->withTimestamps();
	}
}
