class Box {
    constructor(box) {
        this.box = box;
    }

    openBox() {
        this.box.classList.add('active');
    }

    events() {
        this.box.addEventListener('click', ((e) => {
            e.preventDefault();
            this.openBox();
        }));
    }

    init() {
        if (this.box) {
            try {
                this.events();
            } catch (e) {
                console.warn(e);
            }
        }
    }
}

export default Box;
