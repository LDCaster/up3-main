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
                                        <button class="btn btn-warning mb-2 edit" value="{{ $p->id }}"
                                            data-bs-toggle="modal" data-bs-target="#ModalEdit">Edit</button>
                                        <form action="{{ url('/pabrikan', $p->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        <!-- Modal Tambah Data -->

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Data -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pabrikan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Edit Data -->
            <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pabrikan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="nama_vendor" class="form-label">Nama Vendor</label>
                                    <input type="text" class="form-control" id="nama_vendor" name="nama_vendor"
                                        aria-describedby="namavendorlHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_direktur" class="form-label">Direktur</label>
                                    <input type="text" class="form-control" id="nama_direktur" name="nama_direktur">
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                                </div>
                                <div class="mb-3">
                                    <label for="no_notaris" class="form-label">No Notaris</label>
                                    <input type="text" class="form-control" id="no_notaris" name="no_notaris">
                                </div>
                                <div class="mb-3">
                                    <label for="no_khs" class="form-label">No KHS</label>
                                    <input type="text" class="form-control" id="no_khs" name="no_khs">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pengadaan" class="form-label">Jenis Pengadaan</label>
                                    <input type="text" class="form-control" id="nama_pengadaan"
                                        name="nama_pengadaan">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_rekening" class="form-label">Nama Rekening</label>
                                    <input type="text" class="form-control" id="nama_rekening" name="nama_rekening">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_bank" class="form-label">Nama Bank</label>
                                    <input type="text" class="form-control" id="nama_bank" name="nama_bank">
                                </div>
                                <div class="mb-3">
                                    <label for="cabang" class="form-label">Cabang</label>
                                    <input type="text" class="form-control" id="cabang" name="cabang">
                                </div>
                                <div class="mb-3">
                                    <label for="no_rekening" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening">
                                </div>
                                <div class="mb-3">
                                    <label for="no_type" class="form-label">No Type</label>
                                    <input type="text" class="form-control" id="no_type" name="no_type">
                                </div>
                                <div class="mb-3">
                                    <label for="no_spm" class="form-label">No SPM</label>
                                    <input type="text" class="form-control" id="no_spm" name="no_spm">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/pabrikan/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#nama_vendor').val(data.nama_vendor)
                        $('#alamat').val(data.alamat)
                        $('#email').val(data.email)
                        $('#no_telp').val(data.no_telp)
                        $('#nama_direktur').val(data.nama_direktur)
                        $('#jabatan').val(data.jabatan)
                        $('#no_notaris').val(data.no_notaris)
                        $('#no_khs').val(data.no_khs)
                        $('#nama_pengadaan').val(data.nama_vendor)
                        $('#nama_rekening').val(data.nama_rekening)
                        $('#nama_bank').val(data.nama_bank)
                        $('#cabang').val(data.cabang)
                        $('#no_rekening').val(data.no_rekening)
                        $('#no_type').val(data.no_type)
                        $('#no_spm').val(data.no_spm)
                        $('#ModalEdit form').attr('action', `{{ url('pabrikan/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
