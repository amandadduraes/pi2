function mudaIDdelete(id,botao){
         $.ajax({
             url: '../controller/listaBancoController.php',
             method: 'POST',
             data: {id: id},
             dataType: 'json'
         }).done(function(result){
             $(botao).parent().parent().fadeOut(1000).remove();
             console.log(result);
             $('#prin').html(result);
             $('#prin').fadeIn(1000).delay(3000).fadeOut(1000);
         });
     }
