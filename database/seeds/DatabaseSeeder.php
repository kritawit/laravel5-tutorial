<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User Table Seeded!');
    }
}

class UserTableSeeder extends Seeder
{
    public function run() {
        DB::table('users')->delete();
        DB::table('users')->insert([
        	'username' => 'admin',
        	'email' => 'kritawitbunket@gmail.com',
        	'password' => Hash::make('s1125m'),
        	'name' => 'กฤตวิทย์ บุญเกตุ',
        	'tel' => '0959480221',
        	'type' => 'admin',
        	'created_at' => date('Y-m-d H:i:s') ]);
    }
}
