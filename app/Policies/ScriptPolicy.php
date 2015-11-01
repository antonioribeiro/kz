<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use PragmaRX\Sdk\Services\Users\Data\Entities\User;
use PragmaRX\Sdk\Services\Chat\Data\Entities\ChatScript;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\BusinessRole;

class ScriptPolicy
{
    use HandlesAuthorization;

	public function create(User $user, ChatScript $chatScript)
	{
		return $user->businessRole->power <= BusinessRole::POWER_TRIAGE;
	}

	public function update(User $user, ChatScript $chatScript)
	{
		return $this->create($user, $chatScript);
	}

	public function edit(User $user, ChatScript $chatScript)
	{
		return $this->create($user, $chatScript);
	}

	public function store(User $user, ChatScript $chatScript)
	{
		return $this->create($user, $chatScript);
	}

	public function delete(User $user, ChatScript $chatScript)
	{
		return $this->create($user, $chatScript);
	}
}
