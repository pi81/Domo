class JwtActions {
    constructor(token) {
        this.token = token;
    }

    validate(cb) {

        fetch('/wp-json/jwt-auth/v1/token/validate', {
            method: "post",
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + this.token
            },
        }).then(response => {
            if (response.ok) {
                cb(true);
            } else {
                cb(false);
            }

        })
            .catch(e => {});
    }


}


export default JwtActions;
