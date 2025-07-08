$(function () {
    // e c'est l'evenement qui nous ai passe avec la fonction
    $('#contact-form').submit(function(e) {
        // permet d'annuler le comportement oar defaut de l'element envoye
        e.preventDefault();
        //permet de vider les commentaire
        $('.comments').empty();
        //chercher tous les elts du formulaire et les mettre dans post data
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST', // methode d'envoi des donnees
            url: 'forms/contact.php', // url d'envoi des donnees
            data: postdata, //  cet element es en json
            dataType: 'json',
            success: function(json) {

                if(json.isSuccess)
                {
                    $('#contact-form').append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>"); // la fonction apend pemer d'ajouter p commme dernier elt du formulaire
                    $('#contact-form')[0].reset(); //mettre tout les elts de #contact_form a 0 donc les vider
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError); // pour selection l'elts qui suit #firstname et qui a la classe comments
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                }
            }
        });
    });

})