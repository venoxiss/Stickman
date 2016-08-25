<?php


/**
 *
 */
class cWeapon
{
	/**
	 *
	 */
	public function __construct($name, $damage)
	{
		this.$sName = $name;
		this.$iDamage = $damage;
	}

	/**
	 * @var integer
	 */
	public $idWeapon;

	public $sName;

	/**
	 * @var integer
	 */
	public $iDamage;

	/**
	 * @param void $idStickman
	 */
	public function shot($idStickman)
	{

		// TODO: implement here
	}
}
