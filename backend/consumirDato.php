<?php
require_once 'conexion.php';
  class ClsDatos{

    private function conexion(){
      $obj = new ClsConexion();
      $conexion =$obj ->conexion();
      return $conexion;
    }

    public function  mostrarGrupo(){
      $conexion =  $this->conexion();

    }

    public function mostrarNuevoGrupo($idCurso){
          $conexion =  $this->conexion();
          $cons = "SELECT  MAX(id_grupo) FROM grupo WHERE id_curso = $idCurso";
                $exe = mysqli_query($conexion,$cons);
                $numReg = mysqli_num_rows($exe);
                if ($numReg > 0)
                {
                      if ($fila= mysqli_fetch_row($exe)) {
                          $maxId = $fila[0];
                      }
                      $consulta = "SELECT  nombre_grupo FROM grupo WHERE id_grupo = '$maxId'";
                      $exeGrupo = mysqli_query($conexion,$consulta);

                      while ($fila = mysqli_fetch_assoc($exeGrupo)) {
                          $Ultimogrupo  =  $fila["nombre_grupo"];
                      }

                      $str = $Ultimogrupo;
                      $array = str_split($str);
                      // print_r($array);

                        $var = $array[3] .$array[4];
                          if ($array[3]  == 0 AND $array[4] <= 8) {
                                $var = $array[4] + 1;
                                $nuevo  = $array[3].$var;
                          }if ($array[3]  ==0  AND $array[4] ==9) {
                              $nuevo = 10;
                          }if ($array[3] >=1) {
                             $var = $array[3].$array[4];
                             $nuevo  =  $var + 1;
                          }
                      $nuevoGrupo = $array[0].$array[1]."-".$nuevo."-".date("Y"); //creando el siguiente grupo


                }else {
                    $consulta  = "SELECT inicial_curso FROM curso WHERE id_curso =$idCurso";
                    $mostrar = mysqli_query($conexion,$consulta);
                    if ($row  = mysqli_fetch_row($mostrar)) {
                         $inicialCurso  = $row[0];
                    }
                      $Ultimogrupo = null;
                      $nuevoGrupo = $inicialCurso.'-01-'.date("Y");
                }

                    $datos=array(
                                    'ultimoGrupo' =>$Ultimogrupo,
                                    'nuevoGrupo' => $nuevoGrupo
                              );

                        return $datos;
                // public function mostrarNuevoGrupo($id){
                // 		$conexion =  $this->conectarAsistencia();
                //       $proceso = $conexion ->query("SELECT *  FROM personal  WHERE id_per = '$id'");
                //      $mostrar =  mysqli_fetch_array($proceso);
  }

}

$obj = new ClsDatos();
echo json_encode( $obj->mostrarNuevoGrupo(125));

 ?>
