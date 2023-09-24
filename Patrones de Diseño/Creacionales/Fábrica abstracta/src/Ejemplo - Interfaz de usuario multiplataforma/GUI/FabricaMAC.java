import Componentes.Botones.Boton;
import Componentes.Botones.BotonMAC;
import Componentes.Checkboxes.Checkbox;
import Componentes.Checkboxes.CheckboxMAC;

class FabricaMAC implements FabricaGUI {
	public Boton crearBoton() {
		return new BotonMAC();
	}

	public Checkbox crearCheckbox() {
		return new CheckboxMAC();
	}
}
