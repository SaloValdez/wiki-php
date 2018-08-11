
$(document).ready(function(){
    listarNuevoGrupo();
    $('#cbx_grupo').load('./procesos/mostrarComboCurso.php');
});

function listarNuevoGrupo() {
  //mostrar detalle horas grupo
  $('#cbx_grupo').change(function()
  {
    $('#ultimoGrupo').val("");
    $('#nuevoGrupo').val("");
    var grupo = $(this).val();

    $.post( './procesos/mostrarUltimoGrupo.php', { idGrupo: grupo}
          ).done(function(respuesta)
    {
      datos=jQuery.parseJSON(respuesta);
          $('#ultimoGrupo').val(datos['ultimoGrupo']);
          $('#nuevoGrupo').val( datos['nuevoGrupo'] );
    });
  });
}
