let heads = parseInt(localStorage.getItem('heads')) || 0;
let tails = parseInt(localStorage.getItem('tails')) || 0;
localStorage.getItem('tails', tails);

let result_display = document.getElementById('result-display');
let btn = document.getElementById('btn');
let heads_tracker = document.getElementById('heads-tracker');
let tails_tracker = document.getElementById('tails-tracker');

heads_tracker.textContent = `${heads}`;
tails_tracker.textContent = `${tails}`;

btn.addEventListener('click', flipcoin);

function flipcoin(){
    let result = Math.floor(Math.random() * 2);
    result_display.textContent = result == 0 ? 'tails' : 'heads';
    result == 0 ? tails++ : heads++;
    heads_tracker.textContent = `${heads}`;
    tails_tracker.textContent = `${tails}`;
    localStorage.setItem('heads', heads);
    localStorage.setItem('tails', tails);
};


