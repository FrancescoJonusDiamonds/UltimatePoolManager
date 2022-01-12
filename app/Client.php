<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $gender
 * @property string $registration_date
 * @property string $birth_date
 */
class Client extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'surname', 'gender', 'registration_date', 'birth_date'];

}
