$(function(){
    //pesquisar sem refresh na pagina
    $("#pequisa").keyup(function(){
        var search = $(this).val();

            //verificasr se há algo digitado
            if(search != '' ){
                var dados = {
                    palavra : search 

                }
            
            $.post('busca.blade.php', dados, function(retorna){
                //mostra dentro da ul os resultados obtidos.
                    $('.resultado').html(retorna);
            });
        }else{
            $(".resultado").html('');
        }
    });
});