<?php


/**
 * class Stickman
 */
class cStickman
{
	/**
	 *
	 */
	public function __construct($sname,$iPoints)
	{
		// $this->iActionPoint=5;
		// $this->iMovePoint=3;
		$this->sName = $sname;
		$this->iPoints = $iPoints;
	}



	/**
	 * @var Array of virtual items
	 */
	public $idStickman;


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


	public function getName(){
		return $this->sName;
	}
	public function getAttribute(){
		return $this->aovAttributes;
	}

	/**
	 * @param void $int x; int y
	 */
	public function move($idArena,$x,$y)
	{
		// TODO: implement here

		 ////// conditions to verify
        /* verify position in arena */
		$arena=$this->stickmanArena;
		$width=arena.iSizeArenaWidth;
		$height=arena.iSizeArenaHeight;

		if ($x>=width||$y>=height){
			//then return error message
			echo "error : target position out of the arena";
		}

        /*verify position <= 3mouvements */
		$posStickmanX =$this.getPos().$iPosX;
		$posStickmanY = $this.getPos().$iPosY;
		$dist = abs($x-$posStickmanX)+abs($y-$posStickmanY);

		$authorizedMvt = 3;

		if($dist>$authorizedMvt){
			//then return error message
			echo "error : your mouvement is taller than authorized mouvement !";
		}

		//other condition to verify ....

		elseif{
			/*processing : update position and action point */
		  	$this->cell.posX =+ $x;
          	$this->cell.posY =+ $y;
			$iActionPoint=$iActionPoint-$dist;
		}


	}

	/**
	 *
	 */
	public function look($arrena)
	{
		// TODO: implement here
		$allItemsOnCell = [];
		$allStickmanOnCell = [];
		for ($i = 0 ; $i < $arrena->allCell()->length() ; $i++){
			if($arrena->allCell[$i]->getX === $this->getPos[0] && $arrena->allCell[$i]->getX === $this->getPos[1]){
				$allStickmanOnCell = $arrena->allCell[$i]->getStickman ;
				$allItemsOnCell =	$arrena->allCell[$i]->getItems ;
			}
		}
		$leRetour = [$allStickmanOnCell, $allItemsOnCell];

	}

	/**
	 *
	 */
	public function protect($idArena)
	{
		 $iProtectPoint = 1 ;

		// TODO: implement here

		if($iActionPoint > 0 ){
			$iActionPoint=$iActionPoint-1;
		}

		//return $iActionPoint;
	}

	/**
	 * @param void $int idStickman
	 */
	public function attack($idArena,$idStickman)
	{
		// TODO: implement here

		if($iActionPoint > 0 ){
			$iActionPoint=$iActionPoint-1;
		}
		return $id

	}

	/**
	 * @param void $int idItem
	 */
	public function grab($idArena,$idItem)
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
		for ( $i = 0 ; $i < $this->aovAttributes->length() ; $i++){
			if($this->aovAttributes[$i]->getType() === 'life'){
				if($this->aovAttributes[$i]->getCurrent() === 0){
					return "i'm fucking die";
				}
			}
		}
		// TODO: implement here

	}

	/**
	 *
	 */
	public function getPos($arrena)
	{
		for ($i = 0 ; $i < $arrena->allCell()->length() ; $i++){
			for($z = 0 ; $z < $arrena->allCell[$i]->getStickman()->length() ; $z++){
				if($arrena->allCell[$i]->getStickman[$z]->getName === $this->sName){
					$position = [$arrena->allCell[$i]->getX , $arrena->allCell[$i]->getY];
					return $position;
				}
			}
		}
		// TODO: implement here
	}

	/**
	 *
	 */
	public function getIdStickman()
	{
		// TODO: implement here
		return $this->idStickman;
	}


}
