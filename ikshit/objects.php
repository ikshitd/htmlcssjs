<?php
class Books { 
  /* Member variables */
	var $price; 
	var $title; 
  public function __construct($a, $b) {
    $this -> title = $a; 
    $this -> price = $b; 
  }
	/* Member functions */
	function se	tPrice($par){ 
		$this->price = $par; 
	} 
	function getPrice(){ 
		echo $this->price."<br>"; 
	} 
	function setTitle($par){ 
		$this->title = $par; 
	} 
	function getTitle(){ 
		echo $this->title."<br>" ; 
	} 
} 

/* Creating New object using "new" operator */
$maths = new Books("Algebra", 7); 

// /* Setting title and prices for the object */
// $maths->setTitle( "Algebra" ); 
// $maths->setPrice( 7 ); 

/* Calling Member Functions */
$maths->getTitle(); 
$maths->getPrice(); 
$maths -> getPrice(); 
cout << answer << "\n"; 
return; 
?>
