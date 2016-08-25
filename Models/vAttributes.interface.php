<?php


/**An interface implements methods and not variables
 *
 */
interface vAttributes
{
	/**
	 * @var integer
	 */
	public $iCurrent;

	/**
	 * @var integer
	 */
	public $iInit;

	/**
	 * @var integer
	 */
	public $iMax;

	/**
	 * @var integer
	 */
	public $iMin;

	/**
	 * @var enum{strength; life}
	 */
	public $eType;
	public function getCurret(){
		return $this->iCurrent;
	}


	public function getInit(){
		return $this->iInit;
	}


	public function getMax(){
		return $this->$iMax;
	}


	public function getMin(){
		return $this->$iMin;
	}
}
