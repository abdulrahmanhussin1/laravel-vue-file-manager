<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use App\Traits\HasCreatorAndUpdater;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory, SoftDeletes, NodeTrait, HasCreatorAndUpdater;
    protected $table = 'files';
    protected $guarded = 'id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(File::class, 'created_by');
    }
    public function isOwnedBy($userId): bool
    {
        return $this->created_by = $userId;
    }

    public function isRoot()
    {
        return $this->parent_id == null;
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            if(!$model->parent)
            {
                return ;
            }

            $model->path = $model->parent->isRoot()?
        });
    }
}
