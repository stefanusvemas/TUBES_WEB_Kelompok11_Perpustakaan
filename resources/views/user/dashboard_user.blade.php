@extends('user/index_user')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Hi, John Doe 👋</h3>
                </div>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <!-- CARD TAGIHAN SAAT INI -->
                    <div class="col-auto">
                        <div class="card mt-2 w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle">TAGIHAN SAAT INI</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <p class="card-subtitle text-center">Rp. 50000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD BUKU SEDANG DIPINJAM -->
                    <div class="col-auto">
                        <div class="card mt-2 w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle">BUKU SEDANG DIPINJAM</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <p class="card-subtitle text-center">3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <a href="{{url('/user/bayar_tagihan')}}" class="btn btn-primary mt-2 mt-md-0"><i class="fa-regular fa-credit-card"></i> Bayar Tagihan</a>
                    </div>
                </div>

                <!-- TABLE BUKU SEDANG DIPINJAM -->
                <h4 class="mt-4">Buku Sedang Dipinjam</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Sisa Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem</td>
                                <td>19/10/2023</td>
                                <td>2 Hari</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Consectetur</td>
                                <td>19/10/2023</td>
                                <td>4 Hari</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ipsum</td>
                                <td>18/10/2023</td>
                                <td>1 Hari</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- TABLE RIWAYAT PEMINJAMAN BUKU -->
                <h4 class="mt-4">Riwayat Peminjaman Buku</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Buku</td>
                                <td>19/10/2023</td>
                                <td>21/10/2023</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Book</td>
                                <td>19/10/2023</td>
                                <td>23/10/2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection