<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
    'date',
    'amount',
    'comment',
];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
