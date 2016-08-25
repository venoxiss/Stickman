<?php


/**
 * class Arena
 */
class cStickmanArena
{



		/**
		 * @var integer
		 */
		private $iSizeArenaWidth;


		private $aoCell;
		/**
		 * @var integer
		 */
		private $iSizeArenaHeight;

		/**
		 * @var array object
		 */
		public $aoStickmen;

		/**
		 * @var integer
		 */
		private $iMinStickman;

		/**
		 * @var integer
		 */
		private $iMaxStickman;

		/**
		 *
		 */



	/**
	 *
	 */
	public function __construct($size, $maxplayer, $minplayer, $players)
	{
		// initialisation des cellule
		this->$aoCell = [];

		// creatio des cellule
		for ($x = 0; $x < $size; $x++){
			for ($y = 0; $y < $size; $y++){
				this->aoCell[] = new cCell($x,$y);
			}
		}

		// definition des proprieter de la partie
		this->$iMaxStickman = $maxplayer;
		this->$iMinStickman = $minplayer;

		this->aoStickmen = [];
		// ajout des joueur a la partie
		for ( $i = 0 ; $i < $players->length() ; $i++){
			this->aoStickmen[] = $players[$i];
		}

	}
	

	public function addPlayer($stickman) {
		this->aoStickmen[] = $stickman;
	}

	public function SpawnStickmen()
	{
		// ajouter des stickman nimporte sur quelle cellule
		// TODO: implement here
	}

	/**
	 *
	 */
	public function SpawnItems()
	{
		// ajouter des items dans larene sur une cellule aleatoire
		// TODO: implement here
	}

	/**
	 *
	 */
	public function getMaxWeaponStrength()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function isFull()
	{
		// TODO: implement here
	}
}
