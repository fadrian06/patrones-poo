import Configuracion.Configuracion;
import Configuracion.SistemaOperativo;

class ConfiguradorDeAplicacion {
	ConfiguradorDeAplicacion() throws Exception {
		Configuracion configuracion = Configuracion.leerArchivoDeConfiguracion();

		FabricaGUI fabrica = configuracion.SO == SistemaOperativo.Windows
			? new FabricaWindows()
			: new FabricaMAC();

		Aplicacion aplicacion = new Aplicacion(fabrica);
		aplicacion.crearInterfazDeUsuario();
		aplicacion.pintar();
	}
}
