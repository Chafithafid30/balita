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
                            <li class="breadcrumb-item active">Update Data Ibu</li>
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
                <form action="{{ url('/Ibu/ibu/update/' . $ibus->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        {{-- Nama Ayah --}}
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" name="NamaIbu" class="form-control" value="{{ $ibus->nama_ibu }}">
                        </div>

                        {{-- Tanggal Lahir Ayah --}}
                        <div class="form-group">
                            <label>Tanggal Lahir Ibu</label>
                            <input type="date" name="TanggalLahirIbu" class="form-control"
                                value="{{ $ibus->tanggal_lahir_ibu }}">
                        </div>

                        {{-- Pekerjaan Ayah --}}
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <input type="text" name="PekerjaanIbu" class="form-control"
                                value="{{ $ibus->pekerjaan_ibu }}">
                        </div>

                        {{-- Alamat Ayah --}}
                        <div class="form-group">
                            <label>Alamat Ibu</label>
                            <input type="text" name="AlamatIbu" class="form-control" value="{{ $ibus->alamat_ibu }}">
                        </div>

                        {{-- RT Ayah --}}
                        <div class="form-group">
                            <label>RT Ibu</label>
                            <input type="text" name="RTIbu" class="form-control" value="{{ $ibus->RT_ibu }}">
                        </div>

                        {{-- RW Ayah --}}
                        <div class="form-group">
                            <label>RW Ibu</label>
                            <input type="text" name="RWIbu" class="form-control" value="{{ $ibus->RW_ibu }}">
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
    @section('script')
        <script>
            $(function() {
                $.validator.setDefaults({
                    submitHandler: function() {
                        alert("Formulir berhasil diserahkan!");
                    }
                });
                $('#quickForm').validate({
                    rules: {
                        nama_ibu: {
                            required: true
                        },
                        tanggal_lahir_ibu: {
                            required: true,
                            date: true
                        },
                        pekerjaan_ibu: {
                            required: true
                        },
                        alamat_ibu: {
                            required: true
                        },
                        RT_ibu: {
                            required: true
                        },
                        RW_ibu: {
                            required: true
                        }
                    },
                    messages: {
                        nama_ibu: {
                            required: "Silakan masukkan nama Ibu"
                        },
                        tanggal_lahir_ibu: {
                            required: "Silakan masukkan tanggal lahir Ibu",
                            date: "Silakan masukkan format tanggal yang valid (mis. YYYY-MM-DD)"
                        },
                        pekerjaan_ibu: {
                            required: "Silakan masukkan pekerjaan Ibu"
                        },
                        alamat_ibu: {
                            required: "Silakan masukkan alamat Ibu"
                        },
                        RT_ibu: {
                            required: "Silakan masukkan RT Ibu"
                        },
                        RW_ibu: {
                            required: "Silakan masukkan RW Ibu"
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
