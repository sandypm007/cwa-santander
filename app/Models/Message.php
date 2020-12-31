<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * @package App\Models
 * @property string $message
 * @property string $from_user_id
 * @property string $to_user_id
 */
class Message extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message', 'from_user_id', 'to_user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:U',
        'updated_at' => 'datetime:U',
    ];

    /**
     * Gets message sender.
     * @return BelongsTo
     */
    public function from()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * Gets message sender.
     * @return BelongsTo
     */
    public function to()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    public function toArray()
    {
        $base = parent::toArray();
        $date = \DateTime::createFromFormat('U', $base['created_at']);
        $base['formatted_date'] = $date ? $date->format('g:i A | d/m') : null;
        return $base;
    }
}
