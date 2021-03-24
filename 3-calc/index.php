https://en.wikipedia.org/wiki/SOLID

S : Single responsability principle
a class should only have a single responsibility, that is, only changes to one part of the software's specification should be able to affect the specification of the class
O : Open closed principle : 
software entities ... should be open for extension, but closed for modification

<?php
/*
class Calculatrice
{
	protected $nb;
    protected $nb2;
    
	public function __construct( $nb , $nb2 )
    {
    	$this->nb = $nb;
        $this->nb2 = $nb2;
    }
    
    private function add()
    {
    	return $this->nb + $this->nb2;
    }
    
    private function substract()
    {
    	return $this->nb - $this->nb2;
    }
    

    
    public function operation(String $operator)
    {
    	if( $operator == '+')
        	return $this->add();
        else if ( $operator == '-')
        	return $this->substract();
        else 
        	throw new Exception('Invalid operation');
    }
}

class CalculatriceOverride extends Calculatrice
{
	private function multiply()
    {
    	return $this->nb * $this->nb2;
    }
    
    public function operation(String $operator)
    {
    	
    	if( $operator == '*')
        {
        	return $this->multiply();
        }
        else 
        {
        	parent::operation($operator);
        }
    }
}

$c = new CalculatriceOverride(5,10);
echo $c->operator('+');

*/

class Calculatrice
{
	private $nb;
    private $nb2;
    
	public function __construct( $nb , $nb2 )
    {
    	$this->nb = $nb;
        $this->nb2 = $nb2;
    }
    
    public function operation( IOperation $operation )
    {
    	return $operation->calculate($this->nb , $this->nb2 );
    }
}


// contrat entre une classe et l interface
interface IOperation
{
	function calculate( $nb , $nb2);
}

//$o = new IOperation();

class Add implements IOperation
{
	
	public function calculate( $nb , $nb2 )
    {
    	return $nb + $nb2;
    }
}

class Substract implements IOperation
{
	public function calculate( $nb , $nb2 )
    {
    	return ($nb - $nb2);
    }
}

class Multiply implements IOperation
{
	public function calculate( $nb , $nb2 )
    {
    	return $nb * $nb2;
    }
}

$c = new Calculatrice( 1,2 );
echo $c->operation( new Add() );
echo '<br>';
echo $c->operation( new Substract() );
echo '<br>';
echo $c->operation( new Multiply() );




