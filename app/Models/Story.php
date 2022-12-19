<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'story',
        'hug',
        'share',
        'anonymous',
    ];

    protected $table = 'story';

    public function react($id)
    {
        $react = Story::find($id);
        $react->hug = $react->hug + 1;
        $react->save();
    }
}
