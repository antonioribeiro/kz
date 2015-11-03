<?php

namespace App\Policies;

use App\Services\Users\Data\Entities\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessPolicy
{
    use HandlesAuthorization;

	public function create(User $user)
	{
		return $user->is_root;
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

	public function view(User $user)
	{
		return $this->create($user);
	}
}
