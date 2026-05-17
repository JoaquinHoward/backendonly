let noun1 = document.getElementById('noun1');
let noun2 = document.getElementById('noun2')
let verb = document.getElementById('verb');
let adjective = document.getElementById('adjective');
let display_story = document.getElementById('display-story');
let madlibform = document.getElementById('madlibform');

madlibform.addEventListener('submit', function(event){
    event.preventDefault();
    let story = `The ${noun1.value} was ${verb.value} while the ${adjective.value} ${noun2.value}.`;
    display_story.textContent = story;
});


