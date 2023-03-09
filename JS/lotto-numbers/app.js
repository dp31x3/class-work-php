let spinButtons = document.getElementsByClassName('random-number');

let minNumber = 1;
let maxNumber = 99;

for (let spinButton of spinButtons) {
    spinButton.addEventListener('click', function (Event){
        let result = this.nextElementSibling;
        result.innerText = generateRandom(maxNumber);
    })
}

//html output
//myContent.innerHTML = htmlLinks

function generateRandom(maxLimit = 100){
    let rand = Math.random() * maxLimit;
    console.log(rand); // say 99.81321410836433

    rand = Math.floor(rand); // 99
    
    return rand;    
}
