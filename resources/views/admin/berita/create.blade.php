@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form</h5>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('beritaa.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="keterangan" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_name" value="{{ Auth::user()->id }}" class="form-control">
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Penerbit</label>
                                    <div class="col-sm-10">
                                        @foreach ($ar_user as $row)
                                        <input type="date" value="" name="tanggal" class="form-control">
                                        @endforeach
                                    </div>
                                </div> --}}

                                {{-- <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Penerbit</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="id_name">
                                            <option selected>-- Pilih Penerbit --</option>
                                            @foreach ($ar_user as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="foto" type="file" id="formFile">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Simpan</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
