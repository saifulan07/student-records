<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $name
 * @property string $class
 * @property int $level
 * @property string $parent_contact
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';

	protected $casts = [
		'level' => 'int'
	];

	protected $fillable = [
		'name',
		'class',
		'level',
		'parent_contact'
	];
}
