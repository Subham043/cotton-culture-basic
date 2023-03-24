<?php

use App\Enums\RoleEnum;
use App\Enums\UserStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->integer('userType')->default(RoleEnum::USER->label());
            $table->integer('status')->default(UserStatusEnum::VERIFICATION_PENDING->label());
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('otp');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['email', 'phone', 'otp', 'id', 'created_at']);
        });
        DB::table('users')->insert(array(
            'first_name' => 'subham',
            'last_name' => 'subham',
            'email' => 'subham.5ine@gmail.com',
            'phone' => '7892156160',
            'otp' => '7892',
            'password' => '$2y$10$lbG32MTjcGqhG7ogF6d13OBGDuVimLeugJApy1oeCUB/LXNl2X5KK',
            'userType' => RoleEnum::ADMIN->label(),
            'status' => UserStatusEnum::ACTIVE->label(),
        ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
