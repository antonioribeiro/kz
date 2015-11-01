<?php
/**
 * Part of the Sdk package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sdk
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

return [

	'enabled' => true,

	'application_services_path' => app_path() . '/Services/',

	'files_path' => public_path() . '/files/',

	'aliases' => [
		'activation'    => 'PragmaRX\Sdk\Services\Users\Data\Entities\UserActivation',
		'persistence'   => 'PragmaRX\Sdk\Services\Users\Data\Entities\Persistence',
		'reminder'      => 'PragmaRX\Sdk\Services\Users\Data\Entities\Reminder',
		'role'          => 'PragmaRX\Sdk\Services\Users\Data\Entities\Role',
		'throttle'      => 'PragmaRX\Sdk\Services\Users\Data\Entities\Throttle',
		// 'user'          => 'PragmaRX\Sdk\Services\Users\Data\Entities\User',
		'user'          => 'ConsultorioDigital\Services\Users\Data\Entities\User',
	],

	'services' => [
		'Services/Accounts',
//		'Services/Addresses',
		'Services/Activation',

//		'Services/Billing',
//		'Services/Block',
		'Services/Bus',
		'Services/Businesses',

		'Services/Chat',
//		'Services/Cities',
		'Services/Clients',
//		'Services/Clipping',
//		'Services/Connect',
//		'Services/ContactInformation',
//		'Services/Countries',
//		'Services/Currencies',

		'Services/EmailChanges',
		'Services/ExceptionHandler',

		'Services/Files',
//		'Services/Firewall',
//		'Services/Follow',

//		'Services/Groups',

//		'Services/Kinds',

		'Services/Language',
		'Services/Login',

		'Services/Mailer',
		'Services/Messages',

		'Services/Notifications',

		'Services/Passwords',
//		'Services/Profiles',

		'Services/Revisions',
		'Services/Registration',

//		'Services/Settings',
//		'Services/Sms',
//		'Services/States',
//		'Services/Statuses',
		'Services/Security',
		'Services/SystemEntities',

//		'Services/Tags',
		'Services/TwoFactor',
		'Services/Translator',

		'Services/Users',

		'Services/View',

//		'Services/Zip',
	],

	'disabled.packages' => [
		'pragmarx/tracker'
	],

	'packages' => [

		[
			'name' => 'pragmarx/push',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Push\Service\Provider'],
			'facades' => ['Push' => 'PragmaRX\Sdk\Services\Push\Service\Facade']
		],

		[
			'name' => 'pragmarx/markdown',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Markdown\Service\Provider'],
			'facades' => ['Markdown' => 'PragmaRX\Sdk\Services\Markdown\Service\Facade']
		],

		[
			'name' => 'pragmarx/exception',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\ExceptionHandler\Service\Provider'],
			'facades' => ['ExceptionHandler' => 'PragmaRX\Sdk\Services\ExceptionHandler\Service\Facade']
		],

		[
			'name' => 'pragmarx/redirect',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Redirect\Service\Provider'],
			'facades' => []
		],

//		[
//			'name' => 'pragmarx/google2fa',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\Google2FA\Vendor\Laravel\ServiceProvider'],
//			'facades' => [
//				'Google2FA' => 'PragmaRX\Google2FA\Vendor\Laravel\Facade',
//			]
//		],

//		[
//			'name' => 'pragmarx/sms',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\Sdk\Services\Sms\Service\Provider'],
//			'facades' => [
//				'Sms' => 'PragmaRX\Sdk\Services\Sms\Service\Facade',
//			]
//		],

		[
			'name' => 'pragmarx/language',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Language\Service\Provider'],
			'facades' => [
				'Language' => 'PragmaRX\Sdk\Services\Language\Service\Facade',
			]
		],

		[
			'name' => 'pragmarx/view',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\View\Service\Provider'],
		],

		[
			'name' => 'pragmarx/translator',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Translator\Service\Provider'],
			'facades' => [
				// 'Lang' => 'PragmaRX\Sdk\Services\Translator\Service\Facade',
			]
		],

//		[
//			'name' => 'pragmarx/zipcode',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\ZipCode\Vendor\Laravel\ServiceProvider'],
//			'facades' => [
//				'ZipCode' => 'PragmaRX\ZipCode\Vendor\Laravel\Facade',
//			]
//		],

		[
			'name' => 'pragmarx/avatar',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Avatars\Service\Provider'],
			'facades' => [
				'Avatar' => 'PragmaRX\Sdk\Services\Avatars\Service\Facade',
			]
		],

		[
			'name' => 'pragmarx/file',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Files\Service\Provider'],
			'facades' => [
				'File' => 'PragmaRX\Sdk\Services\Files\Service\Facade', /// overrides the Laravel Facade
			]
		],

		[
			'name' => 'pragmarx/auth',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Auth\Service\Provider'],
			'facades' => [
				'Authentication' => 'PragmaRX\Sdk\Services\Auth\Service\Facade',
				'Auth'           => 'PragmaRX\Sdk\Services\Auth\Service\Facade', /// overrides the Laravel Facade
			]
		],

		[
			'name' => 'pragmarx/activation',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Activation\Service\Provider'],
			'facades' => [
				'Activation' => 'PragmaRX\Sdk\Services\Activation\Service\Facade',
			]
		],

		[
			'name' => 'pragmarx/form',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Form\Service\Provider'],
			'facades' => [
				'Form' => 'PragmaRX\Sdk\Services\Form\Service\FormFacade', /// overrides the Laravel Facade
			]
		],

		[
			'name' => 'pragmarx/html',
			'enabled' => true,
			'facades' => [
				'Html' => 'PragmaRX\Sdk\Services\Form\Service\HtmlFacade', /// overrides the Laravel Facade
				'HTML' => 'PragmaRX\Sdk\Services\Form\Service\HtmlFacade', /// overrides the Laravel Facade
			]
		],

		[
			'name' => 'pragmarx/flash',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Flash\Service\Provider'],
			'facades' => [
				'Flash' => 'PragmaRX\Sdk\Services\Flash\Service\Facade',
			]
		],

//		[
//			'name' => 'pragmarx/tracker',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\Tracker\Vendor\Laravel\ServiceProvider'],
//		],

//		[
//			'name' => 'pragmarx/firewall',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\Firewall\Vendor\Laravel\ServiceProvider'],
//		],

//		[
//			'name' => 'pragmarx/sqli',
//			'enabled' => true,
//			'serviceProviders' => ['PragmaRX\SqlI\Vendor\Laravel\ServiceProvider'],
//		],

		[
			'name' => 'pragmarx/glottos',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Glottos\Vendor\Laravel\ServiceProvider'],
		],

//		[
//			'name' => 'way/generators',
//			'enabled' => true,
//			'serviceProviders' => ['Way\Generators\GeneratorsServiceProvider'],
//		],

		[
			'name' => 'jenssegers/date',
			'enabled' => true,
			'serviceProviders' => ['Jenssegers\Date\DateServiceProvider'],
			'facades' => [
				'Carbon' => 'Jenssegers\Date\Date',
			]
		],

		[
			'name' => 'pragmarx/sdk/bus',
			'enabled' => true,
			'serviceProviders' => ['PragmaRX\Sdk\Services\Bus\Service\Provider'],
			'facades' => []
		],

//		[
//			'name' => 'aloha/twilio',
//			'enabled' => true,
//			'serviceProviders' => ['Aloha\Twilio\TwilioServiceProvider'],
//			'facades' => [
//				'Twilio' => 'Aloha\Twilio\Facades\Twilio',
//			]
//		],
	]
];
