import Constructor from './Coches/Constructor.ts'
import MotorDeportivo from './Motores/MotorDeportivo.ts'
import MotorSUV from './Motores/MotorSUV.ts'

export default class DirectorDeCoches {
	construirCocheDeportivo(cc: Constructor) {
		cc.reiniciar()
		cc.asignarAsientos(2)
		cc.asignarMotor(new MotorDeportivo())
		cc.asignarComputadoraDeNavegacion(true)
		cc.asignarGPS(true)
	}

	construirSUV(cc: Constructor) {
		cc.reiniciar()
		cc.asignarAsientos(5)
		cc.asignarMotor(new MotorSUV())
		cc.asignarComputadoraDeNavegacion(true)
		cc.asignarGPS(true)
	}
}
