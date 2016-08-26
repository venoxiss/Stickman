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

	public function create($type){
		if($type === 'strength'){
			$this->iCurrent = 1;
			$this->iInit = 1;
			$this->iMax = 1;
			$this->iMin = 1;
			$this->eType = $type;
		} else {
			$this->iCurrent = 5;
			$this->iInit = 5;
			$this->iMax = 5;
			$this->iMin = 0;
			$this->eType = $type;
		}
	}

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
	public function getMin(){
		return $this->$eType;
	}
}
