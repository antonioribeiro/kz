<?php

namespace App\Services\Chat\Http\Controllers;

use App\Http\Controllers\Controller;
use PragmaRX\Sdk\Services\Chat\Data\Repositories\Chat as ChatRepository;

class Chat extends Controller
{
	private $chatRepository;

	public function __construct(ChatRepository $chatRepository)
	{
		$this->chatRepository = $chatRepository;
	}

	public function index()
	{
		$chats = $this->chatRepository->all();

		return view('chat.server.index')
				->with('listenChannel', 'chat-channel:PragmaRX\\\\Sdk\\\\Services\\\\Chat\\\\Events\\\\ChatMessageSent')
				->with('chats', $chats);
	}
}
