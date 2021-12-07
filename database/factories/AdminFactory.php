<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        //
        'name' => "dummy name",
        'email' => "dummy@gmail.com",
        'email_verified_at' => now(),
        'password' => Hash::make("12345678"), // password
        'remember_token' => Str::random(10),
    ];
});
