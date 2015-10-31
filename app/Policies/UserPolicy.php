<?php

namespace App\Policies;

use App\Services\Users\Data\Entities\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessRole;

class UserPolicy
{
    use HandlesAuthorization;

	public function update(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_MANAGER;
	}

	public function create(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_MANAGER;
    }

	public function viewUsers(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_TRIAGE;
	}

	public function viewDashboard(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_TRIAGE;
	}

	public function viewScripts(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_TRIAGE;
	}
}
