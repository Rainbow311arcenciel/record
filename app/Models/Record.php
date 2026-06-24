<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;

class Record extends Model
{
    protected $fillable = [
        'title_id',
        'date',
        'amount',
        'comment',
    ];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
