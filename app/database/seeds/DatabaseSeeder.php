<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
	public function run() {

		DB::table('users')->insert(array(
            'username'   => 'admin',
            'email'      => 'brewpi-admin@mailinator.com',
            'password'   => Hash::make('brewpi'),
            'first_name' => 'Gabe',
            'last_name'  => 'Smith',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ));
	}
}
