<?php
/**
 * this teh the class of Cell
 */
class cCell
{



	/**
	 * @var integer
	 */
	public $iPosX;

	/**
	 * @var integer
	 */
	public $iPosY;

	/**
	 * @var Array of virtual
	 */
	public $aovItems;

	/**
	 * @var Array object
	 */
	public $aoStickmen;


	/**
	 * class Cell :
         * to detect cells, what is on,
         * items
         * stickman
         *
	 */
	public function __construct($x, $y)
	{
		this->$iPosX = $x;
		this->$iPosY = $y;
 	}

	public function addStickman($stickman)
	{
		this->$aoStickmen[] = $stickman;
	}

	public function addItems($items)
	{
		this->$aoItems[] = $items;
	}

	public function removeStickman($stickman)
	{
		for( i = 0 ; i < this->$aoStickmen->length() ; i++)
		{
			if (this->$aoStickmen[i] === $stickman){
				unset(this->$aoStickmen[i]);
			}
		}
	}

	public function removeItems($items)
	{
		for( i = 0 ; i < this->$aoItems->length() ; i++)
		{
			if (this->$aoItems[i] === $items){
				unset(this->$aoItems[i]);
			}
		}
	}

	public function getY(){
		return this->$iPosY;
	}
	public function getX() {
		return this->$iPosX;
	}
}
