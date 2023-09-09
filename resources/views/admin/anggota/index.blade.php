@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Anggota</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <a href="{{ route('anggotaa.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" title="Tambah Data Film" class="bi bi-bookmark-plus"
                                viewBox="0 0 16 16">
                                <path
                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                            </svg></a></br></br>

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jabatan</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($anggota as $ta)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $no++ }}</a></th>
                                                    <td>{{ $ta->name }}</td>
                                                    <td>{{ $ta->jabatan }}</td>
                                                    <td>{{ $ta->foto }}</td>
                                                    <td>
                                                      <form method="POST" action="{{ route('anggotaa.destroy',$ta->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="btn btn-info btn-sm" title="Detail" href="{{ route('anggotaa.show',$ta->id) }}">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a class="btn btn-warning btn-sm" title="Edit" href="{{ url('anggotaa-edit',$ta->id) }}">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Hapus"
                                                            oneclick="return confirm('Anda yakin data akan dihapus?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                    </td>
                                                    {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection
