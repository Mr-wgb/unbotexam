<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
    public $timestamps = false;

    public function getComment() {
        return $this->comment;
    }
}
