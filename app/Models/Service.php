<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

	public function receipts()
	{
		return $this->belongsToMany(Service::class, 'receipt_service', 'receipt_id', 'service_id');
	}
}
