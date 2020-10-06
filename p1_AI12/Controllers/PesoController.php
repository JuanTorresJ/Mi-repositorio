
<?php
class PesoController{
	public $entrada;
	public $accion;
	public $resultado;
	
	function __construct(){
		$this->entrada= 0;
		$this->accion="";
		$this->resultado= 0;
		$this->pantalla="0";
	} 

	public function cachaParametros(){
		
		if(isset($_POST["resultado"])){
			$this->resultado =
			$_POST["resultado"];
	}
	if(isset($_POST["entrada"])){
			$this->entrada =
			$_POST["entrada"];
}
if(isset($_POST["accion"])){
			$this->accion =
			$_POST["accion"];


		}}


//--------------peso----------------------peso---------------------------------peso------------------------------
		public function ejecutaOperacion(){
			switch ($this->accion) {
				case "GK":
					$this->GK();
					break;
				case 'GO':
					$this->GO();
							
					break;
				case 'KG':
					$this->KG();
					
					break;
				case 'KO':
				    $this->KO();
					
					break;
				case 'OK':
				    $this->OK();

				    break;

				case 'OG':
				    $this->OG();
				
				default:
					
					break;
			}
		}


		private function GK(){
			
			$this->resultado =  $this->entrada /1000;

			echo "<br> Kilogramos<br>";


		}

		private function GO(){
			
            $this->resultado= $this->entrada /28.35;

            echo "<br> Onzas<br>";

		}

		private function KG(){
			
            $this->resultado= $this->entrada *1000;
            echo "<br> Gramos<br>";

		}

		private function KO(){
			
            $this->resultado= $this->entrada *35.274;
            echo "<br> Onzas<br>";

		}


		private function OK(){
			
            $this->resultado= $this->entrada /35.274;
            echo "<br> Kilogramos<br>";

		}


		private function OG(){
			$this->resultado= $this->entrada *28.35;
            echo "<br> Gramos<br>";

		}

		private function reset(){
			$this->entrada= 0;
		$this->accion="";
		$this->resultado= 0;
		

		}
}

  ?>