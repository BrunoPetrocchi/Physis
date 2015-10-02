$(document).ready(function () {
     $("#datepicker").datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          
          changeMonth: true,
          changeYear: true,
          nextText: 'Próximo',
          prevText: 'Anterior'
     });
});

$(document).ready(function () {
     $("#datepicker1").datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          
          changeMonth: true,
          changeYear: true,
          nextText: 'Próximo',
          prevText: 'Anterior'
     });
});

// jquey-ui-1.8.24.custom.min.js
// yearRange - c-100:c+5 // ano  para - e para + 