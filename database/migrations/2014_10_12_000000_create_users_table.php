<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('type');
            $table->string('profile_image')->default('profile_image.png');
            $table->string('date_of_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('rating')->default(0);
            $table->string('description')->nullable();
            $table->string('skills')->nullable();
            $table->string('qualification')->nullable();
            $table->string('subject')->nullable();
            $table->string('current_package')->default('Free');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'ABC',
        'email' => 'admin@gmail.com',
        'phone' => '123123123',
        'type' => 'Admin',
        'profile_image' => 'abc.jpg',
        'date_of_birth' => '2021-01-01',
        'password' => 'admin']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
