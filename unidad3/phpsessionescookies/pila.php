<?php class pila
{
	private $elementos=array();
	public $tope;
	function __construct()
	{
		$this->tope=0;
	}
	public function insertar($elemento)
	{
		$this->elementos[$this->tope]=$elemento;
		$this->tope++;
		echo $this->tope;
	}
	public function eliminar()
	{
		if ($this->tope==0)
			echo "la pila esta vacia";
		else	
			{$this->tope--;
				return $this->elementos[$this->tope];
			}
	}
	public function mostrar()
	{
		for ($i=0;$i<$this->tope;$i++)
			echo $this->elementos[$i]."<br/>";
	}
}