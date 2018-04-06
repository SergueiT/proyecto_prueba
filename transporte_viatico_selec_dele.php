          <?php  include("conexionDB.php"); 

          ?>

          <!-- BEGIN PAGE CONTENT-->
          <div class="row-fluid">
            <h3 class="page-title"> Desechos/Transporte </h3>
            <div class="row-fluid">
              <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget green">
                  <div class="widget-title">
                    <h4><i class="icon-reorder"></i> Buscar Tipo Viatico </h4>
                    <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
                  <div class="widget-body">
                    <!-- BEGIN FORM-->

                    <form name="Form" action="#" method="POST">
                    <form action="#" class="form-horizontal">
                       <div class="control-group">
                        <label class="control-label">No de Solicitud:</label>
                        <div class="control-group">
                    <input type="text" class="span6 " name="txtPrimerNombre" />
                    </div>
                      </div>
                    
                      
                      <!-- <div class="form-actions">-->
                        <button type="submit" class="btn btn-success" name="btn1" value="Buscar">Buscar</button>
                      <!--</div>-->
                    </form>
                  </form>
                    <!-- END FORM-->

                  </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <form name="Form" action="#" method="POST">
                <div class="widget green">
                  <div class="widget-title">
                    <h4><i class="icon-reorder"></i> Resultados</h4>
                    <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
                  <div class="widget-body">
                    <table class="table table-striped table-bordered" id="sample_1">
                      <?php
                      if(isset($_POST["btn1"]) == "Buscar"){
                        $btn = $_POST["btn1"];
                        if ($btn == "Buscar") { 
                            
                            $nombre= $_POST['txtPrimerNombre'];

                            $sql = "select * from viatico where via_NoSolicitud='$nombre'";
                            $cs = mysqli_query($mysql,$sql);
                      echo "<thead>
                        <tr>
                          <th style="; echo "width:8px"; echo ">id_Viatico</th>
                          <th>No_Solicitud</th>
                          <th>Descripcion</th>
                          <th>Fecha</th>
                          <th>Estado</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody> "; 

                      
                      while ($resul = mysqli_fetch_array($cs)) {

                    
                                $var = $resul[0];
                                $var1 = $resul[1];
                                $var2 = $resul[2];
                                $var3 = $resul[3];
                                $var4 = $resul[4];


                        echo "<tr class="; echo "odd gradeX";  echo "name="; echo " >
                          <td>$var</td>
                          <td>$var1</td>
                          <td>$var2</td>
                          <td>$var3</td>
                          <td>$var4</td> 

                      <td><a href='EliminarViatico.php?id=$var' data-role='button' class='btn btn-success' >Eliminar</a></td>
                          <td><a href='viatico_update.php?id=$var' data-role='button' class='btn btn-success'>Modificar</a></td>
                          </tr>
                          </tbody>
                        ";

                    }
                  }
                    
                  } else {

                            $sql = "select * from viatico";
                            $cs = mysqli_query($mysql,$sql);
                            

                      echo "<thead>
                        <tr>
                          <th style='width:8px'>Id</th>
                          <th>No_solicitud</th>
                          <th>Descripcion</th>
                          <th>Fecha</th>
                          <th>Estado</th>
                          <th> </th>
                          </tr>
                      </thead>
                      <tbody> ";  

                        while ($resul = mysqli_fetch_array($cs)) {
                                $var = $resul[0];
                                $var1 = $resul[1];
                                $var2 = $resul[2];
                                $var3 = $resul[3];
                                $var4 = $resul[4];

                        echo "<tr class="; echo "odd gradeX"; echo ">
                          <td>$var</td>
                          <td>$var1</td>
                          <td>$var2</td>
                          <td>$var3</td>
                          <td>$var4</td>
                          <td><a href='../EliminarCita.php?id=$var' data-role='button' class='btn btn-success'>Eliminar</a></td>
                          <td><a href='../EliminarCita.php?id=$var' data-role='button' class='btn btn-success'>Modificar</a></td>
                        </tr>
                                              
                      </tbody>";

                  }
                }

                      ?>
                    
                    </table>
                  </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
              </div>
            </div>
          </form>
            <!-- END SAMPLE FORM PORTLET-->
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
   