<?php

namespace App\Policies;

use App\Services\Users\Data\Entities\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PragmaRX\Sdk\Services\Businesses\Data\Entities\Business;

class BusinessPolicy
{
    use HandlesAuthorization;

	public function create(User $user, Business $business)
	{
		return $user->is_root;
	}

	public function update(User $user, Business $business)
	{
		return $this->create($user, $business);
	}

	public function edit(User $user, Business $business)
	{
		return $this->create($user, $business);
	}

	public function store(User $user, Business $business)
	{
		return $this->create($user, $business);
	}

	public function delete(User $user, Business $business)
	{
		return $this->create($user, $business);
	}

	public function view(User $user, Business $business)
	{
		return $this->create($user, $business);
	}
}
