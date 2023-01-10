class OraiView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        //console.log("view");
        szuloElem.append(`<tr>
            <td>${elem.car_id}</td>
            <td>${elem.neve}</td>
            <td>${elem.szine}</td>
            <td>${elem.evjarat}</td>
            <td>${elem.motorTipus}</td>
            <td>${elem.muszakiAlkalmas}</td>

            <td><button id="szerk${elem.car_id}" class="szerkesztes">✏️</button></td>
            <td><button id="tor${elem.car_id}" class="torol">❌</button></td>
        </tr>`)    

        this.delElem = $(`#tor${elem.car_id}`);
        this.szerkElem = $(`#szerk${elem.car_id}`);

        this.delElem.on("click", () => {
            console.log("Törlés")
            this.kattintasTrigger("del")
        });
        this.szerkElem.on("click", () => {
            console.log("Szerkesztés")
            this.kattintasTrigger("szerk")
        });
    }
    kattintasTrigger(parameter) {
        const esemeny = new CustomEvent(parameter, { detail: this.#elem });
        window.dispatchEvent(esemeny);
    }
}

export default OraiView