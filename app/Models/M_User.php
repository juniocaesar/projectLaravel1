<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_User extends Model
{
    use HasFactory;

    protected $table = 'master_user';

    public function getCredential($username, $password) {
        $db_result = $this::where('mu_username', $username)->where('mu_password', $password)->get();
        return $db_result;
    }
}
