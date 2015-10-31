<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Services\Users\Data\Entities\User;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessClientUser;
use PragmaRX\Sdk\Services\Users\Data\Entities\UserActivation;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessClient;

class AlerjTableSeeder extends Seeder
{
	public function run()
	{
		$fileRepository = app()->make('PragmaRX\Sdk\Services\Files\Data\Repositories\File');

		$file = $fileRepository->uploadFromSystemFile(public_path('assets/images/logo-alo-alerj-50px.png'), User::first());

		$businessesRepository = app()->make('PragmaRX\Sdk\Services\Businesses\Data\Repositories\Businesses');

		$business = $businessesRepository->createBusiness(['name' => 'Alerj']);

		$client = $businessesRepository->createClientForBusiness($business, 'Alô Alerj');
		$client->avatar_id = $file->id;
		$client->save();

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

		$businessClientUser = BusinessClientUser::firstOrCreate([
			'business_client_id' => $client->id,
		    'user_id' => $anderson->id
		]);

		UserActivation::create(
			[
				'user_id' => $anderson->id,
				'code' => $faker->randomDigit(),
				'completed' => true,
			]
		);

		$businessesRepository->createClientUserRole($businessClientUser, $business->id, 'manager');
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
