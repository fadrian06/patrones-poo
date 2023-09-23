class Dialogo {
	/** @param {string} id */
	constructor(id) {
		/** @type {HTMLDialogElement} */
		this.elemento = document.getElementById(id)
	}

	showModal() {
		return this.elemento.showModal
			? this.elemento.showModal()
			: this.elemento.setAttribute('open', true)
	}

	close() {
		return this.elemento.close
			? this.elemento.close()
			: this.elemento.removeAttribute('open')
	}
}
