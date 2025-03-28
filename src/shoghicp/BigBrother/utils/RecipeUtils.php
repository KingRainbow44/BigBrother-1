<?php
/**
 *  ______  __         ______               __    __
 * |   __ \|__|.-----.|   __ \.----..-----.|  |_ |  |--..-----..----.
 * |   __ <|  ||  _  ||   __ <|   _||  _  ||   _||     ||  -__||   _|
 * |______/|__||___  ||______/|__|  |_____||____||__|__||_____||__|
 *             |_____|
 *
 * BigBrother plugin for PocketMine-MP
 * Copyright (C) 2014-2015 shoghicp <https://github.com/shoghicp/BigBrother>
 * Copyright (C) 2016- BigBrotherTeam
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author BigBrotherTeam
 * @link   https://github.com/BigBrotherTeam/BigBrother
 *
 */

declare(strict_types=1);

namespace shoghicp\BigBrother\utils;

use pocketmine\network\mcpe\protocol\CraftingDataPacket;

use shoghicp\BigBrother\DesktopPlayer;

class RecipeUtils{

	/** @var DesktopPlayer */
	private $player;

	public function __construct(DesktopPlayer $player){
		$this->player = $player;
	}

	public function onCraftingData(CraftingDataPacket $packet){
		return null;
	}

	public function __a(){
		/*$pk = new UnlockRecipesPacket();
		$pk->actionId = 0;
		$pk->recipes[] = 163;
		$pk->recipes[] = 438;
		$pk->recipes[] = 424;
		$pk->extraRecipes[] = 0;
		$this->putRawPacket($pk);*/
	}

}
