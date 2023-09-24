import Componentes.Botones.Boton;
import Componentes.Botones.BotonWindows;
import Componentes.Checkboxes.Checkbox;
import Componentes.Checkboxes.CheckboxWindows;

class FabricaWindows implements FabricaGUI {
	public Boton crearBoton() {
		return new BotonWindows();
	}

	public Checkbox crearCheckbox() {
		return new CheckboxWindows();
	}
}
