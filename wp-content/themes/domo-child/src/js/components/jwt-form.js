class JwtForm {
    constructor(formName) {
        this.jwtForm = document.forms[formName];
    }

    events(jwtForm) {
        jwtForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const username = jwtForm.elements['log'].value;
            const password = jwtForm.elements['pwd'].value;
            fetch("/wp-json/jwt-auth/v1/token", {
                method: "post",
                body: new URLSearchParams({username, password})
            })
                .then(response => {
                    if (response.status !== 200 && response.status !== 403) {
                        jwtForm.classList.add("error-not-response");
                        throw Error(response.status);
                    } else {
                        jwtForm.classList.remove("error-not-response");
                        return response.json();
                    }
                })
                .then(response => {
                    if (response.token) {
                        jwtForm.classList.remove("error-validation");
                        localStorage.setItem('jwt-token', response.token);
                        window.location = jwtForm.getAttribute('action');
                    } else {
                        jwtForm.classList.add("error-validation");
                        jwtForm.querySelector('.js-error').innerHTML = response.message
                    }
                })

                .catch(error => {
                    console.error(error);
                });
        });
    };

    check() {

    }
    init(){
        if(this.jwtForm){
            this.events(this.jwtForm);
        }
    }

};

export default JwtForm;

