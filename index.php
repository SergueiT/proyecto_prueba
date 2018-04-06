<?php

$contenido = (isset($_REQUEST['contenido'])) ? $_REQUEST['contenido'] : 0; //operador ternario
$html = plantilla();
$html = preg_replace('/<--BEGIN SIDEBAR MENU-->/',menu(),$html); //sustituyendo el menu en la plantilla
$html = preg_replace('/<--BEGIN PAGE CONTENT-->/',show($contenido),$html); //sustituyendo el contenido en la plantilla
echo $html;

function plantilla()
{
  $html="";
  
  $fp = fopen('transporte_viatico.html','r');
  $html = fread($fp,filesize('transporte_viatico.html')); //filesize para que lo lea completo
  fclose($fp); //cerramos el recurso  
 
  return $html;	
}


function menu()
{
  $menu="
    <ul class='sidebar-menu'>
        <li class='sub-menu active'> <a class='' href='index.php?contenido=0'> <i class='icon-home'></i> <span>Inicio</span> </a> </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-truck'></i> <span>Vehiculos</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href=''> <i class='icon-plus'></i> <span>Crear Vehiculo</span></a></li>
            <li><a class='' href=''> <i class='icon-search'></i> <span>Buscar Vehiculo</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Vehiculo</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-fighter-jet'></i> <span>Tipo de Vehiculos</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='transporte_tipo_vehiculo.html'> <i class='icon-plus'></i> <span>Crear Tipo Vehiculo</span></a></li>
            <li><a class='' href='transporte_buscar_tipo_vehiculo.html'> <i class='icon-search'></i> <span>Buscar Tipo Vehiculo</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Tipo Vehiculo</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-plane'></i> <span>Estado de Vehiculos</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='transporte_estado_vehiculo.htm'> <i class='icon-plus'></i> <span>Crear Estado Vehiculo</span></a></li>
            <li><a class='' href='transporte_buscar_estado_vehiculo.htm'> <i class='icon-search'></i> <span>Buscar Estado Vehiculo</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Estado Vehiculo</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-pencil'></i> <span>Rutas</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='transporte_ruta.htm'> <i class='icon-plus'></i> <span>Crear Rutas</span></a></li>
            <li><a class='' href='transporte_buscar_ruta.html'> <i class='icon-search'></i> <span>Buscar Rutas</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Rutas</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-hospital'></i> <span>Manto. Vehiculo</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='#'> <i class='icon-plus'></i> <span>Ingresar Vehiculo a Mantenimiento</span></a></li>
            <li><a class='' href='#'> <i class='icon-search'></i> <span>Buscar Vehiculo en Mantenimiento</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Vehiculo en Mantenimiento</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-user'></i> <span>Tipo Mantenimiento</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='#'> <i class='icon-plus'></i> <span>Ingresar Tipo de Mantenimiento</span></a></li>
            <li><a class='' href='#'> <i class='icon-search'></i> <span>Buscar Tipo de Mantenimiento</span></a></li>
            <li><a class='' href='#'> <i class='icon-refresh'></i> <span>Actualizar Tipo de Mantenimiento</span></a></li>
          </ul>
        </li>
        <li class='sub-menu'> <a href='javascript:;' class=''> <i class='icon-usd'></i> <span>Viatico</span> <span class='arrow'></span> </a>
          <ul class='sub'>
            <li><a class='' href='#'> <i class='icon-plus'></i> <span>Ingresar Viatico</span></a></li>
            <li><a class='' href='index.php?contenido=1'> <i class='icon-search'></i> <span>Buscar Viatico</span></a></li>
            <li><a class='' href=''> <i class='icon-refresh'></i> <span>Actualizar Viatico</span></a></li>
          </ul>
        </li>
      </ul> 

	
  ";
    //<a href='index.php?contenido=1' class='list-group-item'>Dibujar arbol</a>
    //<a href='index.php?contenido=0' class='list-group-item'>Convertir Bases</a>
    //<a href='#' class='list-group-item'>Ir a Google</a>
  
  return $menu;  
}

function show($contenido)
{
  $recursos = Array('transporte_index.htm','transporte_viatico_selec_dele.php');
  $html = "";
  $fp = fopen($recursos[$contenido],'r');
  $html = fread($fp,filesize($recursos[$contenido]));   //recursos[0]= form1.html
  fclose($fp);	
  
  return $html;
}

?>
