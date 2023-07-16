<?php

use App\Enums\UserRoleEnum;
use App\Enums\UserStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();

            $table->string('role')->default(UserRoleEnum::USER_ROLE_3->value);
            $table->string('status')->default(UserStatusEnum::USER_STATUS_2->value);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
