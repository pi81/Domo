import $ from 'jquery';

import Modal from './components/modal';
import Box from './components/box';

$(document).ready(() => {
    const modal = new Modal(document.getElementById('btn__new-domo'));
    modal.init();

    const box = new Box(document.getElementsByClassName('js-box')[0]);
    box.init();
});

const users = './json/users.json';
const emoji = './json/emojis.json';
const cards = './json/cards.json';
const boxes = './json/boxes.json';
let cardsObj;

// fetch //
fetch(cards)
    .then((response) => {
        if (response.ok) {
            return response.json();
            console.log('response');
        }
        throw new Error();
        console.log('error z else');
    })
    .then((data) => {
        cardsObj = data;
        console.log(obj);
        console.log(data[0].id);
    })
    .catch((error) => {
        console.log(error);
    });
