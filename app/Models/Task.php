<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $guarded = [];
    
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
