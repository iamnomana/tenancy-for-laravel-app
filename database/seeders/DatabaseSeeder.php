<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::create([
            'id' => 'imt',
            'name' => 'IMT',
            'email' => 'info@imtghana.com',
            // 'tenancy_db_name' => 'imt',
        ])->domains()->create([
            'domain' => 'imt.tenancy-for-laravel-app.test'
        ]);
    }
}
