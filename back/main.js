let input_author = document.getElementById('input_author');
let input_topic = document.getElementById('input_topic');
let content = document.getElementById('content');
let submit = document.getElementById('submit');

submit.onclick = function() {  

if (input_author.value == '' || input_topic.value == ''|| content.value == '') {   
    window.alert('Please fill every input.');
}
};