 
<!-- $("#formulaire").submit(function(e){ // On sélectionne le formulaire par son identifiant
    e.preventDefault(); // Le navigateur ne peut pas envoyer le formulaire

    var donnees = $(this).serialize(); // On créer une variable content le formulaire sérialisé
     
    $.ajax({

    //...

        data : donnees,

    //...

    });

}); -->



<script> $("button#submit").click(function() {
$.post("https://gmail.us17.list-manage.com/subscribe/post?u=4dd38927685c8bae4d310ecd8&amp;id=c58468f099", $("form#id").serialize(), function(data){
//DO something
});
$.post("formulaire.php", $('form#id').serialize(), function(data){
//DO something
});
});
</script>