<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => bcrypt('123'),
        ]);

        $customer = new Customer;
        $customer->phone = fake()->phoneNumber;
        $customer->password = bcrypt('123');
        $customer->save();
    }
}
