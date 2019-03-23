<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

				$faker = \Faker\Factory::create();

				foreach(range(1,50) as $index){
					User::create([
						'name' =>$faker->name,
						'email' => $faker->city,
						'password' => bcrypt('secret'),
					]);
				}
    }
}
