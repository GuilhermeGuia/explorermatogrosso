<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "Admin",
            "email" => "admin@admin",
            "type" => "admin",
            "password" => bcrypt("admin"),
            "remember_token" => null,
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $this->call(CidadesSeeder::class);
        $this->call(ServiceTypeSeeder::class);
    }
}
