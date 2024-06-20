<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'sprint__tasks';

    protected $guarded=[];

    public function locations()
    {
        return $this->belongsTo(Location::class);
    }

    public function contacts()
    {
        return $this->belongsTo(SprintContact::class);
    }

}
