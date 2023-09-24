package Configuracion;

public class Configuracion {
	final public SistemaOperativo SO;

	Configuracion(SistemaOperativo SO) {
		this.SO = SO;
	}

	public static Configuracion leerArchivoDeConfiguracion() throws Exception {
		String so = System.getProperty("os.name");

		if (so == "Windows") {
			return new Configuracion(SistemaOperativo.Windows);
		}

		if (so == "Mac OS X") {
			return new Configuracion(SistemaOperativo.MAC);
		}

		throw new Exception("Sistema operativo desconocido.");
	}
}
