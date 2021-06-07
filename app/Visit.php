<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
	protected $fillable = [
		'patient_id',
		'datemonth',
		'dateday',
		'dateyear',
		'time',
		'encounter',
		'markvisit',
		'markstar',
		'omitexams',
		'populateas',
	];
}
