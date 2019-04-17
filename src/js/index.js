import $ from 'jquery';

import Modal from './components/modal';
import Box from './components/box';

$(document).ready(() => {
    const modal = new Modal(document.getElementById('btn__new-domo'));
    modal.init();

    const box = new Box(document.getElementsByClassName('js-box')[0]);
    box.init();
});
