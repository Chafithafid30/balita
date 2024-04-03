@extends('menu')

@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Anak Balita</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('./menu') }}">Home</a></li>
                            <li class="breadcrumb-item active">Halaman Data Anak Balita</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kumpulan Data Anak Balita</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Anak</th>
                                            <th>Tanggal Lahir Anak</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anaks as $a)
                                            <tr>
                                                <td>{{ $a->ayahs->nama_ayah }}</td>
                                                <td>{{ $a->ibus->nama_ibu }}</td>
                                                <td>{{ $a->nama_anak }}</td>
                                                <td>{{ $a->tanggal_lahir_anak }}</td>
                                                <td>{{ $a->jenis_kelamin }}</td>
                                                <td>{{ $a->keterangan_anak }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4s -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis",
                    {
                        text: 'Balita',
                        action: function(e, dt, node, config) {
                            // Gantilah bagian ini dengan logika pengambilan data untuk 5 tahun terakhir
                            var currentDate = new Date();
                            var fiveYearsAgo = new Date();
                            fiveYearsAgo.setFullYear(currentDate.getFullYear() - 5);

                            // Contoh: Ambil data antara lima tahun terakhir
                            var filteredData = dt.rows().data().filter(function(row) {
                                // Gantilah 'date' dengan nama kolom tanggal pada data Anda
                                var rowDataDate = new Date(row[3]);

                                return rowDataDate >= fiveYearsAgo &&
                                    rowDataDate <=
                                    currentDate;
                            });

                            console.log(filteredData);

                            // Hapus data yang ada di DataTables
                            dt.clear();

                            // Tambahkan data yang telah difilter
                            dt.rows.add(filteredData);

                            // Perbarui tampilan DataTables
                            dt.draw();
                        }
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection('script')
