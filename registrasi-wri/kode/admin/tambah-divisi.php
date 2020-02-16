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
                <h3 class="card-title">Tambah Divisi Workshop Riset Informatika</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Divisi : </label>
                            <input type="text" class="form-control form-control-sm col-3" id="nama-divisi" placeholder="masukkan nama divisi" name="nama-divisi" required>
                        </div>
                        <button class="btn btn-success btn-sm" type="submit" name="input-divisi" id="input-divisi"> <i class="fa fa-plus"></i> Tambah Divisi</button>
                        <button class="btn btn-danger btn-sm" type="reset" name="reset-divisi" id="reset-divisi"> <i class="fa fa-times"></i> Reset</button>
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