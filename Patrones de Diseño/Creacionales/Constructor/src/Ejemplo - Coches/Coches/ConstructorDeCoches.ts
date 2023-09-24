import Motor from '../Motores/Motor.ts'
import Constructor from './Constructor.ts'
import Coche from './Coche.ts'

export default class ConstructorDeCoches implements Constructor {
	private coche: Coche

	reiniciar(): void {
		this.coche = new Coche()
	}

	asignarAsientos(asientos: number): void {
		this.coche.asientos = asientos
	}

	asignarMotor(motor: Motor): void {
		this.coche.motor = motor
	}

	asignarComputadoraDeNavegacion(tiene: boolean): void {
		this.coche.computadoraDeNavegacion = tiene
	}

	asignarGPS(tiene: boolean): void {
		this.coche.gps = tiene
	}

	obtenerProducto(): Coche {
		const resultado = this.coche
		this.reiniciar()
		return resultado
	}
}
