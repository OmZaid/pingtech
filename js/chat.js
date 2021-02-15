/*
Adiciona/Remove a classe 'floating-aberto',
executando o efeito no menu flutuante
*/
$('#floating-icon').click(function(){
    $('#floating-ligar').toggle();
    $('#floating-whatsapp').toggle();
    $('#floating-emergencia').toggle();
});

$(".name").focus(function(){
    $(".name-help").slideDown(500);
}).blur(function(){
    $(".name-help").slideUp(500);
});

$(".email").focus(function(){
    $(".email-help").slideDown(500);
}).blur(function(){
    $(".email-help").slideUp(500);
});