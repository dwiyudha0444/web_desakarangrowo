@extends('admin.index')

@section('content')
    <main id="main" class="main">
        <section class="section single-speaker">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                </br>
                                <div class="container">
                                    <div class="block">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 align-self-md-center">
                                                <div class="image-block">
                                                    {{-- @empty($ta->foto)
                        <img src="{{ url('assets/images/thor.jpg') }}" class="img-fluid" alt="Film">
                        @else --}}
                                                    <img src="{{ url('berita/img') }}/{{ $ta->foto }}" class="img-fluid"
                                                        alt="Film">
                                                    {{-- @endempty --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 align-self-center">
                                                <div class="content-block">
                                                    <div class="name">
                                                        <h3>Detail</h3>
                                                    </div>
                                                    <br />
                                                    <div class="details">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">JUDUL</th>
                                                                    <td>{{ $ta->judul }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">TANGGAL</th>
                                                                    <td>{{ $ta->tanggal }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">KETERANGAN</th>
                                                                    <td>{{ $ta->keterangan }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row">Penerbit</th>
                                                                    <td>{{ $ta->user->name }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('beritaa') }}"><button type="button"
                                            class="btn btn-info text-light mt-3">Kembali</button></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>
    </main>
@endsection
