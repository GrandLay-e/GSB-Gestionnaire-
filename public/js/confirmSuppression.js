console.log("ici confirmSuppression.js");
document.querySelector('form').addEventListener('submit', function(event){
    event.preventDefault();
    let selectionnedVisitor = document.getElementById('nomCompletVisiteur').value;
    if(confirm(`Voulez-vous vraiment supprimer le visiteur ${selectionnedVisitor} ?`)){
        this.submit();
    }else{
        alert("Suppression annulée");
    }
});
