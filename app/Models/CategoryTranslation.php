<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryTranslation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'category_translations';

    public $timestamps = false;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $fillable = ['name'];

    // *******************  Scope ******************* //

    // *******************  Relationship ******************* //
}
