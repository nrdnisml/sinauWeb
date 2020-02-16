<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Divisi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Divisi</li>
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
                <h3 class="card-title">Edit Admin Pendaftaran WRI</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ID Admin : </label>
                                <input type="text" class="form-control form-control-sm col-3" id="id-admin" placeholder="" name="id-admin" disabled>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Admin : </label>
                                <input type="text" class="form-control form-control-sm col-3" id="nama-admin" placeholder="Masukkan nama admin" name="nama-admin" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username : </label>
                                <input type="text" class="form-control form-control-sm col-3" id="username" placeholder="Masukkan nama username" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password : </label>
                                <input type="password" class="form-control form-control-sm col-3" id="password" placeholder="Masukkan password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Re-Enter Password : </label>
                                <input type="password" class="form-control form-control-sm col-3" id="re-enter-password" placeholder="Masukkan password lagi" name="re-enter-password" required>
                            </div>

                            <button class="btn btn-success btn-sm" type="submit" name="update-admin" id="update-admin"> <i class="fa fa-pencil-alt"></i> Perbarui Admin</button>
                            <a href="?hal=daftar-divisi"> <button class="btn btn-danger btn-sm" name="batal-divisi" id="batal-divisi"> <i class="fa fa-times"></i> Batal</button></a>
                        </form>
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