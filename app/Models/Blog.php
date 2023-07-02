<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $foreignKey = 'category_id';
    protected $primaryKey = 'id';



    // protected $attributes = [
       
    //     'text_link' => 'text_link',
    // ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
