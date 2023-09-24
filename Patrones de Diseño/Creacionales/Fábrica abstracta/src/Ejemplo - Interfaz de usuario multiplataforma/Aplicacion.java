import Componentes.Botones.Boton;

class Aplicacion {
	private FabricaGUI fabrica;
	private Boton boton;

	Aplicacion(FabricaGUI fabrica) {
		this.fabrica = fabrica;
	}

	void crearInterfazDeUsuario() {
		this.boton = this.fabrica.crearBoton();
	}

	void pintar() {
		this.boton.pintar();
	}
}
