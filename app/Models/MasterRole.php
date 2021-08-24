<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MasterRole
 * 
 * @property string $mr_id
 * @property string $mr_desc
 * @property string $mr_status
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MasterUser[] $master_users
 *
 * @package App\Models
 */
class MasterRole extends Model
{
	protected $table = 'master_role';
	protected $primaryKey = 'mr_id';
	public $incrementing = false;

	protected $fillable = [
		'mr_desc',
		'mr_status',
		'created_by',
		'updated_by'
	];

	public function master_users()
	{
		return $this->hasMany(MasterUser::class, 'mu_mr_id');
	}
}
