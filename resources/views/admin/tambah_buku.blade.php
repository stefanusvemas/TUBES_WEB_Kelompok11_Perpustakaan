@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH BUKU</h3>
                </div>
                <form action="{{url('admin')}}">
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto">
                            <label for="nama">Judul Buku</label>
                            <input type="text" id="judul" class="form-control" required>
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="pengarang">Pengarang</label>
                            <select class="form-select">
                                <option selected>Pengarang Buku</option>
                                <option value="1">John</option>
                                <option value="2">Doe</option>
                                <option value="3">El</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_pengarang')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="stok">Stok</label>
                            <input type="number" id="stok" class="form-control" required>
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="penerbit">Penerbit</label>
                            <select class="form-select">
                                <option selected>Penerbit Buku</option>
                                <option value="1">Atma Jaya</option>
                                <option value="2">Uajy</option>
                                <option value="3">Jaya Library</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_penerbit')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>

                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="kategori">Kategori</label>
                            <select class="form-select">
                                <option selected>Kategori Buku</option>
                                <option value="1">Technology</option>
                                <option value="2">Sains</option>
                                <option value="3">Education</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_kategori')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-end align-items-end">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>



                <!-- TABLE BUKU -->
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
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem</td>
                                <td>Doe</td>
                                <td>Atma Jaya Lib</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ipsum</td>
                                <td>John</td>
                                <td>UAJY</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection