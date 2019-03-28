import $ from 'jquery';

import SelectLanguage from './components/select-language';
import Test from './components/test';
import Modal from './components/modal';

$(document).ready(() => {
    (async () => {
        await new Promise(res => res());
    })();
    window.testComponent = Test;
    const selectLanguage = new SelectLanguage($('.js-select-language'));
    selectLanguage.init();

    const modal = new Modal(document.getElementById('btn__new-domo'));
    modal.init();
});

