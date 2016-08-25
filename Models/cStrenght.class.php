<?php


/**
 *
 */
class cStrenght implements vAttributes
{
	/**
	 *
	 */
	private $maxStrength;
	private $currentStrength;

	public function __construct()
	{
		this.$MaxStrength = 1;
		this.$currentStrength = 1;
	}

	/**
	 *
	 */
	public function proteinShot()
	{
		this.$currentStrength += 1;
		// TODO: implement here
	}

	/**
	 *
	 */
	public function anemia()
	{
		this.$currentStrength -= 1;
		// TODO: implement here
	}
}
