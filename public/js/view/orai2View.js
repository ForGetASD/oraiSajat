import OraiView from "./oraiView.js";

class Orai2View{
    constructor(tomb, parent){
        parent.html(`<table class="table table-dark table-striped table-hover"">
            <thead>
            <tr>
                <th>Car ID</th>
                <th>Név</th>
                <th>Szín</th>
                <th>Évjárat</th>
                <th>Motor Típus</th>
                <th>Müszaki Alkalmasság Vége</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            </table>`)
        this.tablaElem = parent.children("table:last-child");
        this.tbodyElem = this.tablaElem.children("tbody");
        tomb.forEach(adat => {
            new OraiView(adat, this.tbodyElem);
        });
    }
}

export default Orai2View