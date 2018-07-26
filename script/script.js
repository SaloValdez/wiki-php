
$(document).ready(function(){
    listarDetalleGrupo();
});



function listarNuevoGrupo() {
  //mostrar detalle horas grupo
  $('#cbx_grupo').change(function()
  {
    var grupo = $(this).val();
    $.post( './procesos/login/mostrar_horas.php', { idGrupo: grupo} ).done(function(respuesta)
    {
      datos=jQuery.parseJSON(respuesta);
          $('#horaEntrada').val(datos['hEntrada']);
          $('#horaSalida').val( datos['hSalida'] );
    });
  });
}
