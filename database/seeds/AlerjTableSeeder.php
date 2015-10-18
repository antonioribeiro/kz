<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessClient;
use PragmaRX\Sdk\Services\Users\Data\Entities\User;
use PragmaRX\Sdk\Services\Users\Data\Entities\UserActivation;

class AlerjTableSeeder extends Seeder
{
	private $names = [];

	public function run()
	{
		$businessesRepository = app()->make('PragmaRX\Sdk\Services\Businesses\Data\Repositories\Businesses');

		$chatRepository = app()->make('PragmaRX\Sdk\Services\Chat\Data\Repositories\Chat');

		$chatRepository->create('João Miranda', 'joao.miranda@gmail.com');

		$client = BusinessClient::where('name', 'Alô Alerj')->first();

		$faker = Faker::create();

		$anderson = $this->createUser([
			'first_name' => 'Anderson',
			'last_name' => 'Machado',
			'username' => 'andersonmachado',
			'email' => 'andersonmachado@cercred.com.br',
			'password' => env('PASSWORD_DEFAULT'),
			'two_factor_google_secret_key' => '4CMLW2FWIOEUTY2HACIUPGNGGSCXPBES',
			'two_factor_sms_secret_key' => '4CMLW2FWIOEUTY2HACIUPGNGGSCXPBES',
			'two_factor_email_secret_key' => '4CMLW2FWIOEUTY2HACIUPGNGGSCXPBES',
			'is_root' => false
		]);

		UserActivation::create(
			[
				'user_id' => $anderson->id,
				'code' => $faker->randomDigit(),
				'completed' => true,
			]
		);

		$businessesRepository->createClientUserRole($client, 'manager', $anderson);
	}

	/**
	 * @return static
	 */
	private function createUser($attributes)
	{
		if ( ! $user = User::where('email', $attributes['email'])->first())
		{
			$user = User::firstOrCreate($attributes);
		}

		return $user;
	}
}
