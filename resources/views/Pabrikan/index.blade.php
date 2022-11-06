@extends('layouts.main')

@section('main')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pabrikan</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        + Tambah
                    </button>
                    <!-- Modal Tambah Data -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pabrikan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/pabrikan') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama_vendor" class="form-label">Nama Vendor</label>
                                            <input type="text" class="form-control" name="nama_vendor"
                                                aria-describedby="namavendorlHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label">No Telepon</label>
                                            <input type="text" class="form-control" name="no_telp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_direktur" class="form-label">Direktur</label>
                                            <input type="text" class="form-control" name="nama_direktur">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_notaris" class="form-label">No Notaris</label>
                                            <input type="text" class="form-control" name="no_notaris">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_khs" class="form-label">No KHS</label>
                                            <input type="text" class="form-control" name="no_khs">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_pengadaan" class="form-label">Jenis Pengadaan</label>
                                            <input type="text" class="form-control" name="nama_pengadaan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_rekening" class="form-label">Nama Rekening</label>
                                            <input type="text" class="form-control" name="nama_rekening">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_bank" class="form-label">Nama Bank</label>
                                            <input type="text" class="form-control" name="nama_bank">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cabang" class="form-label">Cabang</label>
                                            <input type="text" class="form-control" name="cabang">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_rekening" class="form-label">No Rekening</label>
                                            <input type="text" class="form-control" name="no_rekening">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_type" class="form-label">No Type</label>
                                            <input type="text" class="form-control" name="no_type">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_spm" class="form-label">No SPM</label>
                                            <input type="text" class="form-control" name="no_spm">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>Nama Vendor</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Direktur</th>
                                <th>Jabatan</th>
                                <th>Nomor Notaris</th>
                                <th>Nomor KHS</th>
                                <th>Jenis Pengadaan</th>
                                <th>Nama Rekening</th>
                                <th>Nama Bank</th>
                                <th>Cabang</th>
                                <th>Nomor Rekening</th>
                                <th>No Type Test</th>
                                <th>Nomor SPM</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pabrikan as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nama_vendor }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->no_telp }}</td>
                                    <td>{{ $p->nama_direktur }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td>{{ $p->no_notaris }}</td>
                                    <td>{{ $p->no_khs }}</td>
                                    <td>{{ $p->nama_pengadaan }}</td>
                                    <td>{{ $p->nama_rekening }}</td>
                                    <td>{{ $p->nama_bank }}</td>
                                    <td>{{ $p->cabang }}</td>
                                    <td>{{ $p->no_rekening }}</td>
                                    <td>{{ $p->no_type }}</td>
                                    <td>{{ $p->no_spm }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        -->
                                        <button class="btn btn-warning btn-sm editPabrik" onclick="Edit()">
                                            Ubah Data</button>
                                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        <!-- Modal Tambah Data -->
                                        <div class="modal fade" id="modalubah" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                            Pabrikan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('/pabrikan') }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nama_vendor" class="form-label">Nama
                                                                    Vendor</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_vendor" aria-describedby="namavendorlHelp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat</label>
                                                                <input type="text" class="form-control"
                                                                    name="alamat">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">E-mail</label>
                                                                <input type="text" class="form-control"
                                                                    name="email">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_telp" class="form-label">No
                                                                    Telepon</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_telp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama_direktur"
                                                                    class="form-label">Direktur</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_direktur">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jabatan" class="form-label">Jabatan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jabatan">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_notaris" class="form-label">No
                                                                    Notaris</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_notaris">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_khs" class="form-label">No
                                                                    KHS</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_khs">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama_pengadaan" class="form-label">Jenis
                                                                    Pengadaan</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_pengadaan">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama_rekening" class="form-label">Nama
                                                                    Rekening</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_rekening">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama_bank" class="form-label">Nama
                                                                    Bank</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_bank">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="cabang" class="form-label">Cabang</label>
                                                                <input type="text" class="form-control"
                                                                    name="cabang">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_rekening" class="form-label">No
                                                                    Rekening</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_rekening">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_type" class="form-label">No
                                                                    Type</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_type">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_spm" class="form-label">No
                                                                    SPM</label>
                                                                <input type="text" class="form-control"
                                                                    name="no_spm">
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <script>
        function edit() {
            alert('rereesh')

        }
    </script>
@endsection
