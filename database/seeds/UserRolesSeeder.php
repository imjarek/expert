<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert(array(
            ['id' => '1', 'name' => 'admin'],
            ['id' => '2', 'name' => 'student']
        ));
    }
}
