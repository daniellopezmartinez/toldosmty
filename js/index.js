$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'assets/getcategorias.php'
  })
  .done(function(listas_cat){
    $('#cbx_cat').html(cbx_cat)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })

  $('#cbx_cat').on('change', function(){
    var id = $('#cbx_cat').val()
    $.ajax({
      type: 'POST',
      url: 'assets/getcategorias.php',
      data: {'id': id}
    })
    .done(function(listas_med){
      $('#cbx_med').html(listas_med)
    })
    .fail(function(){
      alert('Hubo un errror al cargar las medidas')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
    ' Video elegido: ' + $('#videos option:selected').text()

    $('#resultado1').html(resultado)
  })

})