<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Divisi IoT</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Divisi IoT</li>
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
                <h3 class="card-title">Pendaftar Divisi IoT</h3>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col">
                        <form class="form-inline d-flex flex-row-reverse">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-success" id="cari-pendaftar" placeholder="Cari Pendaftar" name="cari-pendaftar">
                                <button type="submit" class="btn btn-success btn-sm ml-2" name="cari"> <i class="fa fa-search"></i> Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <table class="table table-bordered table-sm">
                            <th style="width: 30px">#</th>
                            <th style="width: 100px">NIM</th>
                            <th>Nama</th>
                            <th style="width: 100px">No. WA</th>
                            <th style="width: 150px">Program Studi</th>
                            <th style="width: 100px">Status</th>
                            <th style="width: 180px">Aksi</th>
                            <tr>
                                <td>1</td>
                                <td>1841720002</td>
                                <td>Oktaviano Andy Suryadi</td>
                                <td>085766566560</td>
                                <td>D4-TI</td>
                                <td><span class="badge badge-success">Direkomendasikan</span></td>
                                <td>
                                <a href="?hal=detil-calon-android"><button class="btn btn-info btn-sm" type="submit" name="detail-divisi"> <i class="fas fa-book"></i> Rincian </button></a>
                                    <button class="btn btn-danger btn-sm" type="submit" name="hapus-divisi"> <i class="fas fa-trash-alt"></i> Hapus </button> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1841720002</td>
                                <td>Oktaviano Andy Suryadi</td>
                                <td>085766566560</td>
                                <td>D4-TI</td>
                                <td><span class="badge badge-danger">Tidak direkomendasikan</span></td>
                                <td>
                                <a href="?hal=detil-calon-android"><button class="btn btn-info btn-sm" type="submit" name="detail-divisi"> <i class="fas fa-book"></i> Rincian </button></a>
                                    <button class="btn btn-danger btn-sm" type="submit" name="hapus-divisi"> <i class="fas fa-trash-alt"></i> Hapus </button> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>1841720002</td>
                                <td>Oktaviano Andy Suryadi</td>
                                <td>085766566560</td>
                                <td>D4-TI</td>
                                <td><span class="badge badge-secondary">Belum direkomendasi</span></td>
                                <td>
                                <a href="?hal=detil-calon-android"><button class="btn btn-info btn-sm" type="submit" name="detail-divisi"> <i class="fas fa-book"></i> Rincian </button></a>
                                    <button class="btn btn-danger btn-sm" type="submit" name="hapus-divisi"> <i class="fas fa-trash-alt"></i> Hapus </button> </td>
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