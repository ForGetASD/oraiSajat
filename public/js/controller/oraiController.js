import OraiModel from "../model/oraiModel.js";
import Orai2View from "../view/orai2View.js";


class OraiController{
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        const oraiModel = new OraiModel(token);
        this.vegpont = "/api/carDetails";
        oraiModel.adatBe(this.vegpont, this.oraiViewBetolt);
    
        $(window).on("del", (event) => {
            console.log("delesemeny")
            oraiModel.adatTorol(this.vegpont, event.detail)
        })
    }
    oraiViewBetolt(tomb){
        new Orai2View(tomb, $("main"));
    }
}

export default OraiController;