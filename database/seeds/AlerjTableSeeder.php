<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Services\Users\Data\Entities\User;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessClientUser;
use PragmaRX\Sdk\Services\Chat\Data\Entities\ChatScript;
use PragmaRX\Sdk\Services\Chat\Data\Entities\ChatScriptType;
use PragmaRX\Sdk\Services\Chat\Data\Entities\ChatService;
use PragmaRX\Sdk\Services\Users\Data\Entities\UserActivation;

class AlerjTableSeeder extends Seeder
{
	public function run()
	{
		$fileRepository = app()->make('PragmaRX\Sdk\Services\Files\Data\Repositories\File');

		$file = $fileRepository->uploadFromSystemFile(public_path('assets/images/logo-alo-alerj-50px.png'), User::first());

		$businessesRepository = app()->make('PragmaRX\Sdk\Services\Businesses\Data\Repositories\Businesses');

		$business = $businessesRepository->createBusiness(['name' => 'Alerj']);

		$client = $this->createClient($businessesRepository, $business, $file);

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

		$businessClientUser = $this->createBusinessClientUser($client, $anderson);

		$this->activateUser($anderson, $faker);

		$businessesRepository->createClientUserRole($businessClientUser, 'manager');

		$this->createScripts($client);
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

	/**
	 * @param $anderson
	 * @param $faker
	 */
	private function activateUser($anderson, $faker)
	{
		UserActivation::create(
			[
				'user_id' => $anderson->id,
				'code' => $faker->randomDigit(),
				'completed' => true,
			]
		);
	}

	/**
	 * @param $client
	 * @param $anderson
	 * @return static
	 */
	private function createBusinessClientUser($client, $anderson)
	{
		$businessClientUser = BusinessClientUser::firstOrCreate(
			[
				'business_client_id' => $client->id,
				'user_id' => $anderson->id
			]
		);
		return $businessClientUser;
	}

	/**
	 * @param $businessesRepository
	 * @param $business
	 * @param $file
	 * @return mixed
	 */
	private function createClient($businessesRepository, $business, $file)
	{
		$client = $businessesRepository->createClientForBusiness($business, 'Alô Alerj');
		$client->avatar_id = $file->id;
		$client->save();
		return $client;
	}

	private function createScripts($client)
	{
		$service = ChatService::where('name', 'Chat')->first();

		$opening = ChatScriptType::where('name', 'opening')->first();
		$script = ChatScriptType::where('name', 'script')->first();
		$closing = ChatScriptType::where('name', 'closing')->first();

		ChatScript::create([
           'name' => 'Abertura do Chat',
           'business_client_id' => $client->id,
           'chat_service_id' => $service->id,
           'script' => 'Olá, você está no atendimento online via chat do serviço Alô Alerj, meu nome é [operator], como posso ajudá-lo?',
           'chat_script_type_id' => $opening->id,
		]);

		ChatScript::create([
			'name' => 'Dados do cidadão',
			'business_client_id' => $client->id,
			'chat_service_id' => $service->id,
			'script' => 'Para prosseguirmos com o atendimento, vou precisar que você me forneça os seguintes dados: <br><br>NOME COMPLETO<br>CPF<br>TELEFONE FIXO<br>TELEFONE CELULAR<br>ENDEREÇO RESIDENCIAL COM CEP',
			'chat_script_type_id' => $script->id,
		]);

		ChatScript::create([
			'name' => 'Fechamento do Chat',
			'business_client_id' => $client->id,
			'chat_service_id' => $service->id,
			'script' => 'Em breve você receberá um comunicado nosso, e também a transcrição desta conversa por e-mail, caso tenha mais alguma dúvida entre em contato novamente e tenha em mãos o número do seu protocolo de atendimento. O Alô Alerj agradece a confiança depositada nele. <br><br>ALERJ, aqui você tem poder!',
			'chat_script_type_id' => $closing->id,
		]);
	}
}
