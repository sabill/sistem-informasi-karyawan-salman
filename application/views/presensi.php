<head>
  <title>Dashboard</title>
  <style>
    .manage{
      background-color: #000;
      border-color: #000;
      border-radius: 5px;
      color: #FFF;
      margin-right: 10px;
    }
    .table_head{
      background-color: #FFA500;
      color: #FFF;
    }
  </style>
</head>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Inventaris</a>
          </li>
          <li class="breadcrumb-item active">List Inventaris</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Agenda
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table_head">
                  <tr>
                    <th>No</th>
                    <th>Nama Agenda</th>
                    <a href=""><th>Presensi</th></a>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>1</th>
                    <th>Nama Agenda</th>
                    <a href="<?= site_url()?>dashboard/presensi_details"><th>Presensi</th></a>
                  </tr>
                  <tr>
                    <td>00102</td>
                    <td>Asd</td>
                    <td>15</td>
                    <td>2012/04/25</td>
                    <th><button>Details</button></th>
                  </tr>
                  <tr>
                    <td>00103</td>
                    <td>Asdasd</td>
                    <td>10</td>
                    <td>2012/04/25</td>
                    <th><button>Details</button></th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>Telp: +62...</em>
          <br>
          <em>Email: asdasd@asd.asd</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      
