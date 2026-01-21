<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnArgument;

class Jelentkezes extends Model
{
    protected $fillable = ["email","letszam","tura_id"];
    protected $table = "jelentkezesek";

    public function tura()
    {
        return $this->belongsTo(Tura::class);
    }
}
