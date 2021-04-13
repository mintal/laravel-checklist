<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ChecklistItem extends Model
{
    public function checklist() : HasOne
    {
        return $this->hasOne(Checklist::class);
    }
}
