document.getElementById('submit').addEventListener('click', function(event){
    let password = document.getElementById('input_password').value;
    let confirmation = document.getElementById('input_confirmation').value;
    console.log(password);
    console.log(confirmation);
if(password!=confirmation){
    document.getElementById('error').innerHTML='les mots de passe ne correspondent pas.';
    event.preventDefault();
}else{
}
})

//to do : vérifier les majuscules, minuscules, nombre minimum de caractère, présence de nombre et de caractères spéciaux.
