import Motor from './Motor.ts'

export default class MotorSUV implements Motor {
	private encendido = false

	estaEncendido(): boolean {
		return this.encendido
	}
}
