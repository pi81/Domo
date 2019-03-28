class Modal {
    constructor(btnNewDomo) {
        this.btnNewDomo = btnNewDomo;
        this.domoNewCard = document.getElementById('domo-card__new');
        this.cancelNewDomo = document.querySelector('.btn--cancel');
    }

    openModal() {
        this.domoNewCard.style.display = 'block';
        this.cancelNewDomo.addEventListener('click', e => {
            e.preventDefault();
            this.closeModal();
        })
    }

    closeModal() {
        this.domoNewCard.style.display = 'none';
    }

    events() {
        console.log('test423');
        this.btnNewDomo.addEventListener('click', e => {
            e.preventDefault();
            this.openModal();
        })
    }

    init() {
        if (this.btnNewDomo) {
            try {
                this.events();
            } catch (e) {
                console.warn(e);
            }
        }
    }
}

export default Modal;
