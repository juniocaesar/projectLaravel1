<?php

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDbMesin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('master_role');
        Schema::create('master_role', function (Blueprint $table) {
            $table->string('mr_id', 2)->primary();
            $table->string('mr_desc', 50);
            $table->string('mr_status', 1);
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->timestamps();
        });
        DB::table('master_role')->insert(
            [
                'mr_id' => '0',
                'mr_desc' => 'Super Admin',
                'mr_status' => '1',
                'created_by' => 'Super Admin',
                'updated_by' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
                ]
        );
        DB::table('master_role')->insert(
            [
                'mr_id' => '1',
                'mr_desc' => 'Administrator',
                'mr_status' => '1',
                'created_by' => 'Super Admin',
                'updated_by' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
                ]
            );
        DB::table('master_role')->insert(
            [
                'mr_id' => '2',
                'mr_desc' => 'Operator',
                'mr_status' => '1',
                'created_by' => 'Super Admin',
                'updated_by' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        // Schema::dropIfExists('master_region');
        Schema::create('master_region', function (Blueprint $table) {
            $table->string('mre_id', 6)->primary();
            $table->string('mre_desc', 50);
            $table->string('mre_status', 1);
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->timestamps();
        });
        DB::table('master_region')->insert(
            [
                'mre_id' => 'R-0000',
                'mre_desc' => 'DKI Jakarta',
                'mre_status' => '1',
                'created_by' => 'Super Admin',
                'updated_by' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
                ]
            );
        DB::table('master_region')->insert(
            [
                'mre_id' => 'R-0001',
                'mre_desc' => 'Jawa Tengah',
                'mre_status' => '1',
                'created_by' => 'Super Admin',
                'updated_by' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now()
                ]
        );
        // Schema::dropIfExists('master_user');
        Schema::create('master_user', function (Blueprint $table) {
            $table->string('mu_username', 30)->primary();
            $table->string('mu_password', 16);
            $table->string('mu_name', 100);
            $table->string('mu_status', 1);
            $table->string('mu_mr_id', 2)->nullable();
            $table->foreign('mu_mr_id')->references('mr_id')->on('master_role')->onUpdate('cascade')->onDelete('set null');
            $table->string('mu_mre_id', 6)->nullable();
            $table->foreign('mu_mre_id')->references('mre_id')->on('master_region')->onUpdate('cascade')->onDelete('set null');
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_user');
        Schema::dropIfExists('master_role');
        Schema::dropIfExists('master_region');
    }
}
