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
	public function look($idArena)
	{		
		// TODO: implement here

		//$actionReturn = 1 ; 
		//Verify if $iActionPoint!=0
		// if($iActionPoint > 0 && $iLookPoint!=0 ){
		// 	//reduce actionPoint
		// 	$iActionPoint=$iActionPoint-1;
		// 	$iLookPoint=0;
		// }
		// else{
		// 	return null;
		// }


		// We are looking for objects or Stickmen in the current cell
		$currentCell = $this->cell; //getCell($this.getPos()) ?

		//recup arena
		$arena=getStickmanArena($idArena);

		//recup list of stickmen
		$stickmenList = $arena->aoStickmen;

		//recup stickmen which are on the cell
		array $stickmenInCurrentCell;
		if ($stickmenList!=null && !empty($stickmenList)){
			$i=0;
			for ($s=0; $s<=$stickmenList.sizeof; $s++){
				if($stickmenList[$s].getPos()==$currentCell){
					$stickmenInCurrentCell[$i]=$stickmenList[$s];
					$i++;
				}
			}
		}


		//Delay results
		if ($stickmenInCurrentCell!=null && !empty($stickmenInCurrentCell)){
			echo "List of Stickman present in yout cell";
			for ($a=0; $a<=$stickmenInCurrentCell.sizeof();$a++){
				echo $stickmenInCurrentCell[$a].getIdStickman();
			}
		}
		else{
			echo "There are no Stickman in your cell";
		}

		
		




	
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
		// TODO: implement here

	}

	/**
	 *
	 */
	public function getPos()
	{
		// TODO: implement here
		return $this->cell;
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
