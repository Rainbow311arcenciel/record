<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;

class Record extends Model
{
    protected $fillable = [
<<<<<<< HEAD
    'title_id',
    'date',
    'amount',
    'comment',
=======
        'date',
        'title_id',
        'amount',
        'comment'
>>>>>>> main
    ];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
