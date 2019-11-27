echo '
        <ul id="myUL"> 
          <li> 
            <span class="caret" onclick="insertPassword()" ><i class="material-icons pink-text left">kitchen</i>Data Bases</span > 
            <ul class="nested"> 
              <li> 
                <span class="caret" ><i class="material-icons pink-text text-darken-4 left" >kitchen</i >'.$DataBase.'</span >
                <ul class="nested"> 
                  <li> <span class="caret" ><i class="material-icons blue-text left">border_all</i >Tables</span > 
                    <ul class="nested"> 
                      <li> 
                        <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > 
                        <ul class="nested"> 
                          <li> 
                            <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                            <ul class="nested"> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li>
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Inicio </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Num_Dias </li> 
                            </ul> 
                          </li>
                        </ul> 
                      </li> 
                      <li> 
                        <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > 
                        <ul class="nested"> 
                          <li> 
                            <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                            <ul class="nested"> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Direccion </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nivel_Calidad </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Categoria </li> 
                            </ul> 
                          </li> 
                        </ul> 
                      </li> 
                      <li> 
                        <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > 
                        <ul class="nested"> 
                          <li> 
                            <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                            <ul class="nested"> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tarifa_Hr </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo_De_Oficio </li> 
                              <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Supv </li> 
                            </ul> 
                          </li> 
                        </ul> 
                      </li> 
                    </ul> 
                  </li> 
                </ul> 
              </li> 
            </ul> 
          </li> 
        </ul> ';