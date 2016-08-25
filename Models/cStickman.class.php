<?php


/**
 * class Stickman
 */
class cStickman
{
	/**
	 *
	 */
	public function __construct($name)
	{
		this.$aovItems = [];
		this.$aovAttributes = [];
		this.$iActionPoint = 5;
		this.$iMovePoint = 3;
		this.$iPoints = 0;
		this.$sName = $name;
		this.$iVictories = 0;
		this.$iDefeats = 0;
	}

	/**
	 * @var Array of virtual items
	 */
	public $aovItems;

	/**
	 * @var Array of virtual attributes
	 */
	public $aovAttributes;

	/**
	 * @var integer
	 */
	public $iActionPoint;

	/**
	 * @var integer
	 */
	public $iMovePoint;

	/**
	 * @var integer
	 */
	public $iPoints;

	/**
	 * @var string
	 */
	public $sName;

	/**
	 * @var integer
	 */
	public $iVictories;

	/**
	 * @var integer
	 */
	public $iDefeats;

	public function getAttribute(){
		return $this->aovAttributes;
	}

	/**
	 * @param void $int x; int y
	 */
	public function move($x,$y)
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function look()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function protect()
	{
		// TODO: implement here
	}

	/**
	 * @param void $int idStickman
	 */
	public function attack($idStickman)
	{
		// TODO: implement here
	}

	/**
	 * @param void $int idItem
	 */
	public function grab($idItem)
	{
		// TODO: implement here
	}

	/**
	 * @param void $int idItem
	 */
	public function useItems($idItem)
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function leave()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	private function imDying()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function getPos()
	{
		// TODO: implement here
	}
}
