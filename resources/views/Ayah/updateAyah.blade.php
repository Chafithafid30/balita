@extends('menu')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Data Ayah</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('./menu') }}">Home</a></li>
                            <li class="breadcrumb-item active">Update Data Ayah</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('/Ayah/ayah/update/' . $ayahs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        {{-- Nama Ayah --}}
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" name="NamaAyah" class="form-control" value="{{ $ayahs->nama_ayah }}">
                        </div>

                        {{-- Tanggal Lahir Ayah --}}
                        <div class="form-group">
                            <label>Tanggal Lahir Ayah</label>
                            <input type="date" name="TanggalLahirAyah" class="form-control"
                                value="{{ $ayahs->tanggal_lahir_ayah }}">
                        </div>

                        {{-- Pekerjaan Ayah --}}
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <input type="text" name="PekerjaanAyah" class="form-control"
                                value="{{ $ayahs->pekerjaan_ayah }}">
                        </div>

                        {{-- Alamat Ayah --}}
                        <div class="form-group">
                            <label>Alamat Ayah</label>
                            <input type="text" name="AlamatAyah" class="form-control" value="{{ $ayahs->alamat_ayah }}">
                        </div>

                        {{-- RT Ayah --}}
                        <div class="form-group">
                            <label>RT Ayah</label>
                            <input type="text" name="RTAyah" class="form-control" value="{{ $ayahs->RT_ayah }}">
                        </div>

                        {{-- RW Ayah --}}
                        <div class="form-group">
                            <label>RW Ayah</label>
                            <input type="text" name="RWAyah" class="form-control" value="{{ $ayahs->RW_ayah }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    @endsection
    @section('scripts')
        <script>
            $(function() {
                $.validator.setDefaults({
                    submitHandler: function() {
                        alert("Formulir berhasil diserahkan!");
                    }
                });
                $('#quickForm').validate({
                    rules: {
                        nama_ayah: {
                            required: true
                        },
                        tanggal_lahir_ayah: {
                            required: true,
                            date: true
                        },
                        pekerjaan_ayah: {
                            required: true
                        },
                        alamat_ayah: {
                            required: true
                        },
                        RT_ayah: {
                            required: true
                        },
                        RW_ayah: {
                            required: true
                        }
                    },
                    messages: {
                        nama_ayah: {
                            required: "Silakan masukkan nama Ayah"
                        },
                        tanggal_lahir_ayah: {
                            required: "Silakan masukkan tanggal lahir Ayah",
                            date: "Silakan masukkan format tanggal yang valid (mis. YYYY-MM-DD)"
                        },
                        pekerjaan_ayah: {
                            required: "Silakan masukkan pekerjaan Ayah"
                        },
                        alamat_ayah: {
                            required: "Silakan masukkan alamat Ayah"
                        },
                        RT_ayah: {
                            required: "Silakan masukkan RT Ayah"
                        },
                        RW_ayah: {
                            required: "Silakan masukkan RW Ayah"
                        }
                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });
            });
        </script>
    @endsection('script')
