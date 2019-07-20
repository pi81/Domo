import JwtActions from './js/components/jwt-actions';

(
    function () {
        const token = localStorage.getItem('jwt-token');
        const jwt = new JwtActions(token);
        jwt.validate((logged) => {
            if (!logged) {
                localStorage.removeItem('jwt-token');
                window.location = data.logout_url
            }else{
                document.querySelector('nav .menu').classList.add('is-visible');
            }
        })
    }
)();
