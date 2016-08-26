<?php


/**
 *
 */
class cLife implements vAttributes
{
	private var $maxLife;
	private var $currentLife;

	/**
	 *
	 */
	public function __construct()
	{
		this.$maxLife = 5;
		create('life';)
	}

	/**
	 *
	 */
	public function getStone()
	{
		this.$currentLife = this.$maxLife;
		// TODO: implement here : life ++
	}

	/**
	 *
	 */
	public function getBored(damage)
	{
		if ( (this.$currentLife - damage) < 0 ) {
			this.$currentLife = 0;
		} else {
			this.$currentLife = this.$currentLife - damage ;
		}

		// TODO: implement here : life --
	}
}
