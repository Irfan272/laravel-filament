<?php

namespace App\Models;

use Filament\Actions\Concerns\BelongsToLivewire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'date',
        'amount',
        'note',
        'image'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
