function copiarModelo(divMais) {
    var html = $(".modelo").clone();
    html.removeClass("modelo");
    html.removeClass("d-none");
    html.addClass("d-flex");
    $(divMais).addClass("d-none");
    $(divMais).siblings(".criar").addClass("d-none")

    $("#Questoes").append(html);
}

function removerQuestao(divMenos) {
    var div = $(divMenos);
    div.closest(".questao").prev().find(".add-more").removeClass("d-none");
    div.closest(".questao").prev().find(".criar").removeClass("d-none");
    div.closest(".questao").remove();

}