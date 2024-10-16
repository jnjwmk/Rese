<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function area ()
    {
        return $this->belongsTo(Area::class);
    }

    public function genre ()
    {
        return $this->belongsTo(Genre::class);
    }
}