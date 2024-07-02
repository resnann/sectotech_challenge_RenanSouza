<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Playlist
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $author
 * @property $created_at
 * @property $updated_at
 *
 * @property Conteudo[] $conteudos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Playlist extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'description', 'author'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conteudos()
    {
        return $this->hasMany(\App\Models\Conteudo::class, 'id', 'playlist_id');
    }
    
}
