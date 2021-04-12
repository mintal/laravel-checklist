<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Checklist extends Model
{
    use HasFactory;

    public $incrementing = true;

    protected $fillable = ['name', 'completed'];

    public function items() : HasMany {
        return $this->hasMany(ChecklistItem::class);
    }
}
