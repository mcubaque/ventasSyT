<?php
class Productos
{
	private $id_producto;
	private $nom_prod;
	private $precio;
	private $stock;
	private $id_categoria;
	private $Conexion;
	
	public function setId_producto($id_producto)
	{
		$this->id_producto=$id_producto;
	}
	
	public function getId_producto()
	{
		return ($this->id_producto);
	}
	
	
	public function setNom_prod($nom_prod)
	{
		$this->nom_prod=$nom_prod;
	}
	
	public function getNom_prod()
	{
		return ($this->nom_prod);
	}
	
	
	public function setPrecio($precio)
	{
		$this->precio=$precio;
	}
	
	public function getPrecio()
	{
		return ($this->precio);
	}

	public function setStock($stock)
	{
		$this->stock=$stock;
	}
	
	public function getStock()
	{
		return ($this->stock);
	}
	
		public function setId_categoria($id_categoria)
	{
		$this->id_categoria=$id_categoria;
	}
	
	public function getId_categoria()
	{
		return ($this->id_categoria);
	}
	
	
	
	public function crearProducto($id_producto,$nom_prod,$precio,$stock,$id_categoria)
	{
		$this->id_producto=$id_producto;
		$this->nom_prod=$nom_prod;
		$this->precio=$precio;
		$this->stock=$stock;
		$this->id_categoria=$id_categoria;		
	}
	
	public function agregarProducto()
	{	
		$this->Conexion=Conectarse();
		$sql="INSERT INTO productos(id_producto,nom_prod,precio,stock,id_categoria)
        values ('$this->id_producto','$this->nom_prod','$this->precio','$this->stock','$this->id_categoria')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	/*public function modificarProducto(){	
		$this->Conexion=Conectarse();
		$sql="UPDATE producto SET prodid='$this->idProducto',provid='$this->idProveedor',prodmarca='$this->marca',prodgenero='$this->genero',prodprecio='$this->precio',prodcolor='$this->color',prodescripcion='$this->descripcion' WHERE prodid = '$_POST[prodid]'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function eliminarProducto(){
		$this->Conexion=Conectarse();
		$sql = "DELETE FROM producto WHERE prodid = '$_GET[prodid]' ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function consultarProducto(){
		$this->Conexion=Conectarse();
		$sql = "SELECT * FROM producto";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function consultarProductoDama(){
		$this->Conexion=Conectarse();
		$sql = "SELECT * FROM producto WHERE prodgenero='femenino'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function consultarProductoCaballero(){
		$this->Conexion=Conectarse();
		$sql = "SELECT * FROM producto WHERE prodgenero='Masculino'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function consultarIdProducto(){
		$this->Conexion=Conectarse();
		$sql = "SELECT * FROM producto WHERE prodid='$_GET[id]'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}*/

	
}

?>