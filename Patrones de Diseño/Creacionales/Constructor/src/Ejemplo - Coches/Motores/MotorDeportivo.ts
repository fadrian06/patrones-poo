import Motor from './Motor.ts'

export default class MotorDeportivo implements Motor {
	private encendido = false

	estaEncendido(): boolean {
		return this.encendido
	}
}
