<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Blank Clients</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Clients</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive-sm">
            <table id="example2" class="table table-dark table-sm table-bordered table-hover text-nowrap table-striped-columns table-hover table-borderless">
              <thead>
                <tr>
                  <th>ACTIONS</th>
                  <th>COMPANY NAME</th>
                  <th>NAME CLIENT</th>
                  <th>ADDRESS</th>
                  <th>LIC EMP</th>
                  <th>PHONE 1</th>
                  <th>PHONE 2</th>
                  <th>EMAIL 1</th>
                  <th>EMAIL 2</th>
                  <th>CGPE</th>
                  <th>IFTA</th>
                  <th>TAX/EIN</th>
                  <th>NY PERMIT</th>
                  <th>NM PERMIT</th>
                  <th>KY PERMIT</th>
                </tr>
              </thead>
              <tbody>
  <?php $mstrCli=new ClienteControlador; $mstrCli->mostrarClientes(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </section>
  </div>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>