<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MasterRegion
 * 
 * @property string $mre_id
 * @property string $mre_desc
 * @property string $mre_status
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MasterUser[] $master_users
 *
 * @package App\Models
 */
class MasterRegion extends Model
{
	protected $table = 'master_region';
	protected $primaryKey = 'mre_id';
	public $incrementing = false;

	protected $fillable = [
		'mre_desc',
		'mre_status',
		'created_by',
		'updated_by'
	];

	public function master_users()
	{
		return $this->hasMany(MasterUser::class, 'mu_mre_id');
	}
}
