<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Timesheet;
use App\Models\AttributeValue;

class Project extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class, 'entity_id');
    }
}
