
<?php
class VolumenController{
	public $entrada;
	public $accion;
	public $resultado;
	public $pantalla;


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
				case "LM":
					$this->LM();
					break;
				case 'LC':
					$this->LC();
							
					break;
				case 'ML':
					$this->ML();
					
					break;
				case 'MC':
				    $this->MC();
					
					break;
				case 'CL':
				    $this->CL();

				    break;
			    case 'CM':
					$this->CM();
							
					break;
		
			;
				
				default:
					
					break;
			}
		}


		private function LM(){
			
			$this->resultado =  $this->entrada *1000;

			echo "<br> Mililitros<br>";


		}

		private function LC(){
			
            $this->resultado= $this->entrada *0.001;

            echo "<br> Metro Cubico<br>";

		}

		private function ML(){
			
            $this->resultado= $this->entrada /1000;
            echo "<br> Litros<br>";

		}

		private function MC(){
			
            $this->resultado= $this->entrada *1e-6;
            echo "<br> Metros Cubicos <br>";

		}


		private function CL(){
			
            $this->resultado= $this->entrada *1000;
            echo "<br> Litros<br>";

		}


		private function CM(){
			$this->resultado= $this->entrada *1e+6;
            echo "<br> Mililitros<br>";

		}


		

		private function reset(){
			$this->entrada= 0;
		$this->accion="";
		$this->resultado= 0;
		$this->pantalla="0";

		}
}

  ?>