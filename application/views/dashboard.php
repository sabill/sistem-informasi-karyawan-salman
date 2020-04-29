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
      background-color: rgb(73, 68, 64);
      color: #FFF;
    }
    #content-wrapper{
    background: -webkit-linear-gradient(left, #000, #FFA500);
    }
    .my-5{
      color: #FFF;
    }
  </style>
</head>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            User Management
          </div>
            <div class="card-body">
              <form action="" id="user_management">
                <button class="manage" id="edit">Edit Data</button>
                <button class="manage" id="add">Tambah</button>
                <button class="manage" id="delete">Hapus</button>
              </form>      
            </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List Karyawan
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table_head">
                  <tr>
                    <th>Username</th>
                    <th>Nama Karyawan</th>
                    <th>Status</th>
                    <th>Start date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger</td>
                    <td>Tiger Nixon</td>
                    <td>Non Aktif</td>
                    <td>2011/04/25</td>
                  </tr>
                  <tr>
                    <td>Aufa</td>
                    <td>Aufa Fadlurohman</td>
                    <td>Aktif</td>
                    <td>2020/06/29</td>
                  </tr>
                  <tr>
                    <td>Ben</td>
                    <td>Ben Cumb</td>
                    <td>Non Aktif</td>
                    <td>2010/07/30</td>
                  </tr>
                  <tr>
                    <td>Yumna</td>
                    <td>Yumna</td>
                    <td>Aktif</td>
                    <td>2020/07/30</td>
                  </tr>
                  <tr>
                    <td>Farhan</td>
                    <td>Farhan</td>
                    <td>Aktif</td>
                    <td>2020/07/30</td>
                  </tr>
                  <tr>
                    <td>Zaidan</td>
                    <td>Zaidan Albanna</td>
                    <td>Aktif</td>
                    <td>2020/07/30</td>
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

      
