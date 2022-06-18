  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Customer Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center">nombre empresa</h3>

                <p class="text-muted text-center">nombre dueño</p>
                <a href="#" class="btn btn-primary btn-block"><b>editar perfil cliente</b></a>
              </div>
            </div>


          </div>


          <div class="col-md-9">

            <div class="card">

              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#perfil" data-toggle="tab">perfil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#trucks" data-toggle="tab">trucks</a></li>
                  <li class="nav-item"><a class="nav-link" href="#files" data-toggle="tab">files</a></li>
                  <li class="nav-item"><a class="nav-link" href="#pdf" data-toggle="tab">PDF</a></li>
                  <li class="nav-item"><a class="nav-link" href="#alcohol" data-toggle="tab">Alcohol and drugs</a></li>
                </ul>
              </div>


              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="perfil">
                  <!-- espacio para mostrar datos del cliente -->
                  <p>espacio para mostrar datos del cliente</p>                 
                  </div>

                  <div class="tab-pane" id="trucks">
                  <!-- espacio para mostrar vehiculos del cliente -->
                  <p>espacio para mostrar vehiculos del cliente</p>  
                  </div>

                  <div class="tab-pane" id="files">
                  <!-- espacio para mostrar los archivos subidos de este cliente -->
                  <p>espacio para mostrar los archivos subidos de este cliente</p> 
                  </div>

                  <div class="tab-pane" id="pdf">
                  <!-- espacio para mostrar los archivos subidos de este cliente --> 
                  <p>espacio para mostrar los formatos pdf subidos de este cliente</p>
                  </div>

                  <div class="tab-pane" id="alcohol">
                  <!-- espacio para mostrar los archivos subidos de este cliente -->
                  <p>espacio para mostrar los servicios filtrados por el servicio de alcohol y drogas</p> 
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>