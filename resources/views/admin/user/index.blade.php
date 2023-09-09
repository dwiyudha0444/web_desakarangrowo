@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
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

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                {{-- <div class="filter">
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
                                </div> --}}

                                <div class="card-body">
                                    <h5 class="card-title">User <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($user as $ta)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $no++ }}</a></th>
                                                    <td>{{ $ta->name }}</td>
                                                    <td>{{ $ta->email }}</td>
                                                    <td>{{ $ta->role }}</td>
                                                    <td>
                                                      <form method="POST" action="{{ route('user.destroy',$ta->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        <a class="btn btn-warning btn-sm" title="Edit" href="{{ url('user-edit',$ta->id) }}">
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
