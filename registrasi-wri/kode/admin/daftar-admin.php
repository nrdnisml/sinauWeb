<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Admin</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Admin Pendaftaran WRI</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-success" id="cari-admin" placeholder="Cari Divisi" name="cari-admin">
                                <button type="submit" class="btn btn-success btn-sm ml-2"> <i class="fa fa-search"></i> Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="col text-right">
                       <a href="?hal=tambah-admin"><button class="btn btn-success btn-sm" name="tambah-admin" type="submit"> <i class="fa fa-plus"> </i> Tambah Admin </button></a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <table class="table table-bordered table-sm">
                            <th>#</th>
                            <th style="width: 500px">Nama Admin</th>
                            <th>Aksi</th>
                            <tr>
                                <td>1</td>
                                <td>Oktaviano Andy</td>
                                <td> 
                                    <a href="?hal=edit-admin"><button class="btn btn-info btn-sm" type="submit" name="edit-admin"> <i class="fas fa-pencil-alt"></i> Edit </button> </a>
                                    <button class="btn btn-danger btn-sm" type="submit" name="hapus-admin"> <i class="fas fa-trash-alt"></i> Delete </button> 
                                </td>
                            </tr>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <<</a> </li> <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">>></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->