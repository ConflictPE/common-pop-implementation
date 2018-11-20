<?php

/**
 *     ___                 __  _  _        _      ___    __
 *    / __\  ___   _ __   / _|| |(_)  ___ | |_   / _ \  /__\
 *   / /    / _ \ | '_ \ | |_ | || | / __|| __| / /_)/ /_\
 *  / /___ | (_) || | | ||  _|| || || (__ | |_ / ___/ //__
 *  \____/  \___/ |_| |_||_|  |_||_| \___| \__|\/     \__/
 *
 *
 *  Copyright (C) 2018 Conflict Network.
 *
 *  This is private software, you cannot redistribute and/or modify it in any way
 *  unless given explicit permission to do so. If you have not been given explicit
 *  permission to view or modify this software you should take the appropriate actions
 *  to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 *
 */

declare(strict_types=1);

namespace ConflictNetwork\Common\Implementation\POP\Game;

use ConflictNetwork\Common\Contracts\Game\Game as IGame;
use ConflictNetwork\Common\Traits\Game\Game as GameTrait;

class Game implements IGame {
	use GameTrait;

	/**
	 * Create a new game instance.
	 *
	 * @param \ConflictNetwork\Common\Implementation\POP\Game\GameId $id
	 * @param \ConflictNetwork\Common\Implementation\POP\Game\GameType $type
	 * @param int $online
	 * @param int $max
	 */
	public function __construct(GameId $id, GameType $type, int $online, int $max) {
		$this->initGame($id, $type, $online, $max);
	}

}