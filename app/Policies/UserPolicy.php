<?php

namespace App\Policies;

use App\Services\Users\Data\Entities\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessRole;

class UserPolicy
{
    use HandlesAuthorization;

	public function create(User $user)
	{
		return $user->businessRole->power <= BusinessRole::POWER_MANAGER;
	}

	public function update(User $user)
	{
		return $this->create($user);
	}

	public function edit(User $user)
	{
		return $this->create($user);
	}

	public function store(User $user)
	{
		return $this->create($user);
	}

	public function delete(User $user)
	{
		return $this->create($user);
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
