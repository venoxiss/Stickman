<?php


/**
 * class Arena blablabla
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
		$this->aoCell = [];
		$this->iSizeArenaHeight = $size;
		$this->iSizeArenaWidth = $size;

		// creatio des cellule
		for ($x = 0; $x < $size; $x++){
			for ($y = 0; $y < $size; $y++){
				$this->aoCell[] = new cCell($x,$y);
			}
		}

		// definition des proprieter de la partie
		$this->iMaxStickman = $maxplayer;
		$this->iMinStickman = $minplayer;

		$this->aoStickmen = [];
		// ajout des joueur a la partie
		for ( $i = 0 ; $i < $players->length() ; $i++){
			$this->aoStickmen[] = $players[$i];
		}

	}

	public function allPlayer(){
		return $this->aoStickmen;
	}

	public function allCell(){
		return $this->aoCell;
	}

	public function addPlayer($stickman) {
		this->aoStickmen[] = $stickman;
	}

	public function SpawnStickmen()
	{
		for ( $i = 0 ; $i < $aoStickmen ; $i++){
			$x = rand(0,this->$iSizeArenaWidth);
			$y = rand(0,this->$iSizeArenaHeight);
			for ( $z = 0 ; $z < $aoCell->length() ; z++ ){
				if ($aoCell[$z]->getY() === $y && $aoCell[$z]->getX() === $x){
					$aoCell[$z]->addStickman($aoStickmen[$i]);
				}
			}
		}
		// TODO: implement here
	}

	/**
	 *
	 */
	public function SpawnItems()
	{
		for ( $i = 0 ; $i < $aoStickmen ; $i++){
			$x = rand(0,$this->$iSizeArenaWidth);
			$y = rand(0,$this->$iSizeArenaHeight);
			for ( $z = 0 ; $z < $aoCell->length() ; z++ ){
				if ($aoCell[$z]->getY() === $y && $aoCell[$z]->getX() === $x){
					$aoCell[$z]->addStickman($aoStickmen[$i]);
				}
			}
		}
	}

	/**
	 *
	 */
	public function getMaxWeaponStrength()
	{
		$maxStrengh = 1
		for($i = 0 ; $i < $this->aoStickmen->length() ; $i++){
			if( $this->aoStickmen[$i]->getAttribute  > $maxStrengh){
				$maxStrengh = $this->aoStickmen[$i]->getAttribute;
			}
		}
		// TODO: implement here
	}

	/**
	 *
	 */
	public function isFull()
	{
		if($this->aoStickmen->length() === $this->iMaxStickman){
			return 'full';
		}
		// TODO: implement here
	}
}
