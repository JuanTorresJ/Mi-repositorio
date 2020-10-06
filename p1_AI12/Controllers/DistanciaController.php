
<?php
class DistanciaController{
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
		if(isset($_POST["pantalla"])){
			$this->pantalla =
			$_POST["pantalla"];
		}
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
				case "CM":
					$this->CM();
					break;
				case 'CP':
					$this->CP();
							
					break;
				case 'CY':
					$this->CY();
					
					break;
				case 'MC':
				    $this->MC();
					
					break;
				case 'MP':
				    $this->MP();

				    break;
			    case 'MY':
					$this->MY();
							
					break;
				case 'PC':
					$this->PC();
					
					break;
				case 'PM':
				    $this->PM();
					
					break;
				case 'PY':
				    $this->PY();

				    break;
				case 'YC':
				    $this->YC();

				    break;
				case 'YM':
				    $this->YM();

				    break;
				case 'YP':
				    $this->YP();

				    break;

			;
				
				default:
					
					break;
			}
		}


		private function CM(){
			
			$this->resultado =  $this->entrada /100;

			echo "<br> Metros<br>";


		}

		private function CP(){
			
            $this->resultado= $this->entrada *0.393701;

            echo "<br> Pulgadas<br>";

		}

		private function CY(){
			
            $this->resultado= $this->entrada *0.01093613888889;
            echo "<br> Yardas<br>";

		}

		private function MC(){
			
            $this->resultado= $this->entrada *100;
            echo "<br> Cemtimetros<br>";

		}


		private function MP(){
			
            $this->resultado= $this->entrada *39.3701;
            echo "<br> Pulgadas<br>";

		}


		private function MY(){
			$this->resultado= $this->entrada *1.09361;
            echo "<br> Yardas<br>";

		}


		private function PC(){
			$this->resultado= $this->entrada *2.54;
            echo "<br> Cemtimetros<br>";

		}

		private function PM(){
			$this->resultado= $this->entrada *0.0254;
            echo "<br> Metros<br>";

		}


		private function PY(){
			$this->resultado= $this->entrada *0.0277778;
            echo "<br> Yardas<br>";

		}

		private function YC(){
			$this->resultado= $this->entrada *91.44;
            echo "<br> Cemtimetros<br>";

		}

		private function YM(){
			$this->resultado= $this->entrada *0.9144;
            echo "<br> Metros<br>";

		}

		private function YP(){
			$this->resultado= $this->entrada *36;
            echo "<br> Pulgadas<br>";

		}

		private function reset(){
			$this->entrada= 0;
		$this->accion="";
		$this->resultado= 0;
		$this->pantalla="0";

		}
}

  ?>