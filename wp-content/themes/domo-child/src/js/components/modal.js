class Modal {
    constructor(btnNewDomo) {
        this.btnNewDomo = btnNewDomo;
        this.overlayNewCard = document.getElementById('overlay__new-card');
        this.cancelNewDomo = document.querySelector('.btn--cancel');
        this.domoNew = document.getElementById('domo-card__new--content');
    }

    openModal() {
        this.overlayNewCard.style.display = 'block';
        this.overlayNewCard.style.opacity = '1';
        this.cancelNewDomo.addEventListener('click', (e) => {
            e.preventDefault();
            this.closeModal();
        });
        this.overlayNewCard.addEventListener('click', (e)=> {
            if (this.domoNew.contains(e.target)) {

            } else {
                this.closeModal();
            }
        })
    }

    closeModal() {
        this.overlayNewCard.style.display = 'none';
        this.overlayNewCard.style.opacity = '0';
    }

    events() {
        this.btnNewDomo.addEventListener('click', (e) => {
            e.preventDefault();
            this.openModal();
        });
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
