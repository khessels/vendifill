<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $parent_id
 * @property int $source_id
 * @property string $source
 * @property int $target_id
 * @property string $target
 * @property string $message_type
 * @property string $message
 * @property float|null $rating
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Comment extends Model
{
    use HasFactory;
	protected $table = 'comments';

	protected $casts = [
		'user_id' => 'int',
		'parent_id' => 'int',
		'source_id' => 'int',
		'target_id' => 'int',
		'rating' => 'float'
	];

	protected $fillable = [
		'user_id',
		'parent_id',
		'source_id',
		'source',
		'target_id',
		'target',
		'message_type',
		'message',
		'rating'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
