import Motor from '../Motores/Motor.ts'

export default interface Constructor {
	reiniciar(): void
	asignarAsientos(asientos: number): void
	asignarMotor(motor: Motor): void
	asignarComputadoraDeNavegacion(tiene: boolean): void
	asignarGPS(tiene: boolean): void
}
