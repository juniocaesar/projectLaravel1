<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MasterUser
 * 
 * @property string $mu_username
 * @property string $mu_password
 * @property string $mu_name
 * @property string $mu_status
 * @property string|null $mu_mr_id
 * @property string|null $mu_mre_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MasterRole|null $master_role
 * @property MasterRegion|null $master_region
 *
 * @package App\Models
 */
class MasterUser extends Model
{
	protected $table = 'master_user';
	protected $primaryKey = 'mu_username';
	public $incrementing = false;

	protected $hidden = [
		'mu_password'
	];

	protected $fillable = [
		'mu_password',
		'mu_name',
		'mu_status',
		'mu_mr_id',
		'mu_mre_id',
		'created_by',
		'updated_by'
	];

	public function master_role()
	{
		return $this->belongsTo(MasterRole::class, 'mu_mr_id');
	}

	public function master_region()
	{
		return $this->belongsTo(MasterRegion::class, 'mu_mre_id');
	}
}
