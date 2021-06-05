$(function() {
    $('#bntAtualiza').click(function(){
        // e.preventDefault();
         var u_nome = $('#nome').val();
         var u_senha = $('#senha').val();
         var u_instituicao = $('#Instituição').val();
         var u_email = $('#email').val();
         $.ajax({
             url: '../controller/EditaPerfilController.php',
             method: 'POST',
             data: {name: u_nome, senha: u_senha, instituicao: u_instituicao, email: u_email},
             dataType: 'json'
         }).done(function(result){
             console.log(result);
             $('#prin').prepend('<p>'+ result  + '</p>');
         });
     });
});


