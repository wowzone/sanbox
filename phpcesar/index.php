<?php 


Class Cabecera
{
	private $texto; //atributo
	public function _construct($titulo) //metodo
	{
		$this->texto=$titulo;
	}

	public function graficar()
	{
		echo "<h1>".$this->texto. "</h1>";
	}
}

//**********************************************************

Class Cuerpo{


	private $lineas=array();
	public function iniciar_linea($li)
	{
		$this->linea[]=$li;
	}
	public function graficar()
	{
		for ($i=0; $i< sizeof($this-lineas); $i++)
		{
			?>
		<p>  <?php echo $this->lineas[$i];  ?> </p>
		<?php
		}
}
}


Class Footer 
{
private $texto;
public function _construct($cadena)
{
	$this->texto=$cadena;

}
public function graficar()
{
	echo "<hr/>"."<h1>".$this->texto. "</h1>";
}

}

Class  Pagina 
{

	private $cabecera;
	private $body;
	private $pie;

	public function _construct($texto1, $texto2)
	{
		$this->cabecera= new Cabecera($texto1);
		$this->body=  new Cuerpo();
		$this->pie = new Footer($texto2);

	}

}

 ?>