    
    //variable declarer pour la recuperation des elements du styles

var coter_inscription   = document.getElementsByClassName("coter1")[0],
    coter_connection    = document.getElementsByClassName("coter2")[0],
    connection          = document.getElementsByClassName("coterConnection")[0],
    inscription         = document.getElementsByClassName("coterInscription")[0];


    //la partie connection est cacher au depart 


inscription.addEventListener("click",()=>{
    coter_connection.style.transform="scale(0)";
    setTimeout(() => {
        coter_connection.style.display="none";
        coter_inscription.style.display="block";
        coter_inscription.style.transform="scale(1)";
    }, 500);
    
});
connection.addEventListener("click",()=>{
    coter_inscription.style.transform="scale(0)";
    setTimeout(()=>{
        coter_inscription.style.display="none";
        coter_connection.style.display="block";
        coter_connection.style.transform="scale(1)";
    },500);
    
})

// une autre fonction pour rendre les pade resposive
function es_identique(mot_1,mot_2) {

//variable declare pour la conformite du mot de passe de creation 
var password_1 = document.getElementById('pwd'),
    password_2 = document.getElementById('cpwd');

    if (password_1.value != password_2.value) {
        var Message_Erreur = document.getElementsByClassName('Erreur')[0];
        password_1.value='';
        password_2.value='';
        Message_Erreur.value="Mots de passe incorrect";
        return false;
    } else {
        return true;
    }
}
