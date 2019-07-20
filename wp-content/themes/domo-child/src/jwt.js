import JwtActions from './js/components/jwt-actions';

(function () {

    const token = localStorage.getItem('jwt-token');
    let menu = document.querySelector('nav .menu');
    let menuAdminItem = menu.querySelector('a[href$="/admin-panel/"]').parentElement;

    const jwt = new JwtActions(token);
    jwt.validate((logged) => {
        if (!logged) {
            menuAdminItem.parentElement.removeChild(menuAdminItem);
        }
        menu.classList.add('is-visible')
    })
})();
