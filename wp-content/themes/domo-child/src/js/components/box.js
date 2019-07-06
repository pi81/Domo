class Box {
    constructor(box) {
        this.box = box;
        this.domoPass =  document.querySelector('.domo-pass');
        this.domoPassInput = document.querySelector('#domo-pass-input');
        this.domoPassSubmit = document.querySelector('.domo-pass__submit');
        this.navigation = document.querySelectorAll('.single-box__nav');
        this.navPrev = document.querySelector('.single-box__nav--prev');
        this.navNext = document.querySelector('.single-box__nav--next');
    }

    getPassword() {
        this.domoPass.style.display = 'block';
        this.domoPassSubmit.addEventListener('click', (e) => {
            e.preventDefault();

            if (this.domoPassInput.value.length === 0) {
                console.log('podaj hasło');
            } else {
                this.domoPass.style.display = 'none';

                if (this.box.classList.contains('active')) {
                    window.location = this.box.href;

                } else {
                    this.openBox();
                }
            }
        });
    };

    nav() {
        Array.from(this.navigation).forEach(nav => {
            nav.addEventListener('click', (e) => {
                e.preventDefault();

                console.log(e.target);

            })
        })
    }

    openBox() {
        this.box.classList.add('active');
    }

    events() {
        this.nav();

        this.box.addEventListener('click', ((e) => {
            e.preventDefault();

            if (this.box.classList.contains('active')) {
                window.location = this.box.href;

            } else {
                this.getPassword();

                // this.openBox();
            }
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
