console.log("ici confirmSuppression.js");
document.querySelector('form').addEventListener('submit', function(event){
    event.preventDefault();
    if(confirm(`Voulez-vous vraiment supprimer le visiteur ?`)){
        this.submit();
        document.getElementById('message').innerHTML = "Visiteur supprimé avec succès.";
        //show success message
        document.getElementById('message').style.display = 'block';
        
    }else{
        alert("Suppression annulée");
    }
});
