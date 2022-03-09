<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Todo
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property int $completed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TodoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Todo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todo whereUserId($value)
 * @mixin \Eloquent
 */
class Todo extends Model
{
    protected $fillable=['title', 'deadline','description','completed','user_id'];
    use HasFactory;

    protected $casts = [
        'deadline'  => 'datetime:Y-m-d\TH:i'
    ];
}
