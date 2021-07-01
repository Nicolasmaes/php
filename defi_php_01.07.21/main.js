let input_author = document.getElementById('author');
let input_topic = document.getElementById('topic_article');
let content = document.getElementById('content');
let submit = document.getElementById('submit');
let alert = document.getElementById('alert');



function emptyfields() {
if (input_author.value == '' || input_topic.value == ''|| content.value == '') {   
    alert.innerHTML= 'Please fill every input.';
    submit.disabled=true;
}else{
    submit.disabled=false;
}
};

submit.addEventListener('click', emptyfields);

/* input_author.change=emptyfields(); */