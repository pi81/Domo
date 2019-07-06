import $ from 'jquery';

import Modal from './components/modal';
import Box from './components/box';
import BoxList from './components/box-list';

$(document).ready(() => {
    /* jsons for other boxes
    const users = './json/users.json';
    const emoji = './json/emojis.json';
    const cards = './json/cards.json';
    */

    const modal = new Modal(document.getElementById('btn__new-domo'));
    modal.init();

    const box = new Box(document.getElementsByClassName('js-box')[0]);
    box.init();

    const boxList = new BoxList(document.querySelector('.js-box-list'));
    boxList.init();
});
