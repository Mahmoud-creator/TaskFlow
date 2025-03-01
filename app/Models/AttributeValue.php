<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;
use App\Models\Project;

class AttributeValue extends Model
{
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'entity_id');
    }
}
