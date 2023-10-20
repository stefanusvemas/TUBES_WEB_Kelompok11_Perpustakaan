@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/tambah_buku')}}">Tambah Buku</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Penerbit</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH PENERBIT</h3>
                </div>
                <form action="{{url('admin/tambah_buku')}}">
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto">
                            <label for="nama">Nama Penerbit</label>
                            <input type="text" id="namaPenerbit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-end mt-2">
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