<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Jelentkezes;

class Tura extends Model
{
    protected $table = "turak";

    protected $fillable = ["nev","tav","elerheto_hely"];

    public function jelentkezesek(){
        return $this-> hasMany(Jelentkezes::class);
    }
}
