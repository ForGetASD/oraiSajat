class OraiModel{
    #tomb = []
    constructor(token){
        this.token = token;
        console.log("model")
    }

    adatBe(vegpont, myCallBack) {
        console.log("vegpont")
        fetch(vegpont, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            }
        })
            .then((response) => response.json())
            .then((data) => {
                console.log('Succes: ', data)
                this.#tomb = data;
                console.log(this.#tomb)
                myCallBack(this.#tomb);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
    
    adatTorol(vegpont, adat){
        console.log("Töröltem: ", adat)
        vegpont += "/" + adat
        fetch(vegpont, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.token
            }
        })
            .then()
            .then(() => {
                console.log('Sikeres törlés')
                
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
}

export default OraiModel