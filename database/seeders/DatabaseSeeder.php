<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 4; $i++) {
            DB::table('products')->insert([
                'article' => Str::random(10),
                'name' => Str::random(10).'@example.com',
                'status' => Str::random(10),
                'data' => json_encode([
                        "flat", 
                ]),
            ]);
        }

        $data = new Role();
        $data->name = 'Web Developer';
        $data->slug = 'web-developer';
        $data->save();

        $data = new Permission();
        $data->name = 'Create Products';
        $data->slug = 'create-products';
        $data->save();

        $developer = Role::where('slug','web-developer')->first();
        $createProds = Permission::where('slug','create-products')->first();

        $user1 = new User();
        $user1->name = 'test';
        $user1->email = 'testadmin@test.com';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($developer);
        $user1->permissions()->attach($createProds);
    }   
}
