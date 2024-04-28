//console.log("te");
function inflationCalculator(){
    //console.log("te");
    let inflationRate = document.querySelector("#inflationRate");
    let money = document.querySelector("#money");

    inflationRate = parseFloat(inflationRate.value);
    money = parseFloat(money.value);
    
    let years = document.querySelector("#years").value;

    years = parseFloat(years);
    
    //worth -> vredi -> vrednost znaci
    //formula za presmetuvanje inflacija za edna godina
    let worth = money + (money * (inflationRate / 100));
    //console.log(worth);

    for(let i = 1; i<years; i++){
        worth += worth * (inflationRate / 100);
    }
    worth = worth.toFixed(2);
    //console.log(worth);
    let newElement = document.createElement("div");
    newElement.classList = "new-value";
    newElement.innerText = `Denesnite ${money}€ vredat kako ${worth} za ${years} godini. `;

    document.querySelector(".container").appendChild(newElement);
}

//TUKA ZAVRSUVA OVOJ PROEKT