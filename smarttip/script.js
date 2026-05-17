let food_cost = document.getElementById('food-cost');
let tax_amount = document.getElementById('tax-amount');
let num_people = document.getElementById('num-people');
let submit_btn = document.getElementById('submit-btn');



submit_btn.addEventListener('click', compute);
function compute(event){
    event.preventDefault();
    let cost = parseFloat(food_cost.value);
    let people = parseInt(num_people.value);
    if(tax_amount.value == "ten"){
        cost = cost + cost * 0.1;
    }else if(tax_amount.value == "fifteen"){
        cost = cost + cost * 0.15;
    }else if(tax_amount.value == "twenty"){
        cost = cost + cost * 0.20;
    }
    cost /= people;
    let amount_person = document.getElementById('amount-person');
    amount_person.textContent = `${cost}`;
}



