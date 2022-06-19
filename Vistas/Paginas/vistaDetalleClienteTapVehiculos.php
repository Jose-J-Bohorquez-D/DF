<div class="table-responsive">
  <table id="example1" class="table table-dark table-sm table-bordered table-hover text-nowrap table-striped-columns table-hover table-borderless">
  <thead>
    <tr>
      <th>ACTION</th>
      <th>PLATE</th>
      <th>MODEL</th>
      <th>YEAR</th>
      <th># VIN</th>
      <th>VALUE</th>
      <th># DOTE</th>
      <th>PENDING 1</th>
      <th>PENDING 2</th>
      <th>PENDING 3</th>
      <th>ASSIGNED TO</th>
      <th>ASSIGNED SERVICE</th>
      <th>START SERVICE</th>
      <th>END SERVICE</th>
    </tr>
  </thead>
  <tbody>
    <?php $mtrDtosPerfilCli3=new ClienteControlador; $mtrDtosPerfilCli3->mostrarDatosTapVehiculosCliente(); ?>
  </tbody>
</table>
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