@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Hi, Admin 👋</h3>
                </div>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <!-- Tambah Peminjaman -->
                    <div class="col-auto">
                        <a href="{{url('admin/tambah_peminjaman')}}" class="btn btn-primary mt-2 mt-md-0"><i class="fa-solid fa-book-open"></i> Tambah Peminjaman</a>
                    </div>
                    <!-- Pengembalian -->
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary mt-2 mt-md-0"><i class="fa-solid fa-book"></i> Pengembalian</a>
                    </div>
                    <!-- Tambah Buku -->
                    <div class="col-auto">
                        <a href="#" class="btn btn-success mt-2 mt-md-0"><i class="fa-solid fa-plus"></i> Tambah Buku</a>
                    </div>
                </div>

                <!-- TABLE BUKU SEDANG DIPINJAM -->
                <hr>
                <h4 class="mt-4">List Buku</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem</td>
                                <td>Doe</td>
                                <td>Atma Jaya Lib</td>
                                <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ipsum</td>
                                <td>John</td>
                                <td>UAJY</td>
                                <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection