class BoxList {
    constructor(boxList) {
        this.boxList = boxList;
        this.boxes = './json/boxes.json';
        this.cardsObj; // empty array for json
    }

    createBox(boxTitle) {
        const item = document.createElement('a');
        item.classList.add('grid__item');
        item.href = '/single-box.html';

        const domoBox = document.createElement('div');
        domoBox.classList.add('domo-box');
        item.appendChild(domoBox);

        const domoName = document.createElement('h3');
        domoName.classList.add('domo-box__name');
        domoBox.appendChild(domoName);
        domoName.innerText += boxTitle;

        this.boxList.appendChild(item);
    }

    generateListBox(cards) {
        for (let i = 0; i < cards.length; i++) {
            this.createBox(cards[i].name);
        }
    }

    fetch() {
        fetch(this.boxes)
            .then((response) => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error();
            })
            .then((response) => {
                this.cardsObj = response;
                this.generateListBox(this.cardsObj);
            })
            .catch((error) => {
                console.log(error);
            });
    }

    events() {
        this.fetch();
    }

    init() {
        if (this.boxList) {
            try {
                this.events();
            } catch (e) {
                console.warn(e);
            }
        }
    }
}

export default BoxList;
