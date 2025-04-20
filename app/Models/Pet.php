<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'food',
		'walk',
		'morning',
		'afternoon',
		'race',
		'weight',
		'birthdate',
		'admission_date',
		'house_place',
		'housemates',
		'sex',
		'photo',
		'other_morning',
		'other_afternoon',
		'night',
		'is_aggressive',
		'necklace',
		'is_aggressive_details',
		'necklace_details',
		'allergy',
		'allergy_details',
		'fracture',
		'fracture_details',
		'scar',
		'scar_details',
		'hospitalization',
		'hospitalization_details',
		'training',
		'training_details',
		'indoor',
		'outdoor',
		'arrive',
		'behavior_dogs',
		'behavior_people',
		'observation',
		'recommendation',
		'medic',
		'customer_id',
	];
	public function client()
{
    return $this->belongsTo(Client::class);
}

}
