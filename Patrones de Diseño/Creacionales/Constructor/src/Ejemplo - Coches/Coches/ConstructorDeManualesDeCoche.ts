import Motor from '../Motores/Motor.ts'
import Constructor from './Constructor.ts'
import Manual from './Manual.ts'

export default class ConstructorDeManualesDeCoche implements Constructor {
	private manual: Manual

	reiniciar(): void {
		this.manual = new Manual()
	}

	asignarAsientos(asientos: number): void {
		this.manual.asientos = asientos
	}

	asignarMotor(motor: Motor): void {
		this.manual.motor = motor
	}

	asignarComputadoraDeNavegacion(tiene: boolean): void {
		this.manual.computadoraDeNavegacion = tiene
	}

	asignarGPS(tiene: boolean): void {
		this.manual.gps = tiene
	}

	obtenerProducto(): Manual {
		const resultado = this.manual
		this.reiniciar()
		return resultado
	}
}
