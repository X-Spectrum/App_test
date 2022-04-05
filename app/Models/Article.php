<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categorie
 * @property string $nom
 * @property float $prix
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['categorie', 'nom', 'prix', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categorie');
    }
}
