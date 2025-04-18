<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'customer_id',
		'food',
		'race',
		'weight',
		'birthdate',
		'sex',
		'photo',
		'is_aggressive',
		'is_aggressive_details',
		'necklace',
		'necklace_details',

	];
	public function client()
{
    return $this->belongsTo(Client::class);
}

}
