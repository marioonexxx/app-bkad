@extends('layouts.navbar')
@section('title', 'Manajemen Akun Pengguna (OPD) Kabupaten Maluku Barat Daya')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Manajemen Akun Pengguna (OPD) Kabupaten Maluku Barat Daya</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Manajemen Akun</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row starter-main">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                            {{-- Bagian kiri: Judul dan ikon --}}
                            <div class="d-flex align-items-center gap-3 flex-grow-1">
                                <h5 class="mb-0">Tabel Pengguna (Akun OPD) Kabupaten Maluku Barat Daya</h5>

                            </div>
                            {{-- Bagian kanan: Tombol Add --}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createModal">
                                <i class="fa-solid fa-plus-circle"></i> Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display table-striped border" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Asal Instansi/OPD</th>
                                            <th>NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Nama Jabatan</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->opd->nama }}</td>
                                                <td>{{ $item->nip }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->nama_jabatan }}</td>
                                                <td>
                                                    @switch($item->role)
                                                        @case(5)
                                                            <span class="badge bg-warning">PPK</span>
                                                        @break

                                                        @case(6)
                                                            <span class="badge bg-success">Bendahara</span>
                                                        @break

                                                        @default
                                                            <span class="badge bg-secondary">-</span>
                                                    @endswitch
                                                </td>


                                                <td>
                                                    <div class="d-flex gap-2">

                                                        {{-- Tombol Edit --}}
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $item->id }}">
                                                            <i class="fa-regular fa-pen-to-square"></i>
                                                        </button>


                                                        {{-- Tombol Hapus --}}
                                                        <form action="{{ route('manajemen_user.destroy', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal{{ $item->id }}">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Delete -->
                                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('manajemen_user.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="modal-content">
                                                            <div class="modal-header text-dark">
                                                                <h5 class="modal-title" id="deleteModalLabel"><i
                                                                        class="fa-solid fa-triangle-exclamation me-2"></i>Konfirmasi
                                                                    Hapus</h5>
                                                                <button type="button" class="btn-close btn-close-white"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus pengguna
                                                                <strong>{{ $item->name }}</strong>?
                                                                <br><small class="text-muted">Data yang dihapus tidak dapat
                                                                    dikembalikan.</small>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="fa-solid fa-trash-can me-1"></i>
                                                                    Hapus</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Modal: Edit Pengguna -->
                                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <form action="{{ route('manajemen_user.update', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editModalLabel{{ $item->id }}">
                                                                    <i class="fa-solid fa-pen-to-square me-2"></i> Edit
                                                                    Pengguna
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                            </div>
                                                            <div class="modal-body row g-3">
                                                                <div class="col-md-6">
                                                                    <label for="opd_id" class="form-label">Asal
                                                                        Instansi/OPD</label>
                                                                    <select name="opd_id" class="form-select" required>
                                                                        @foreach ($dataOPD as $opd)
                                                                            <option value="{{ $opd->id }}"
                                                                                {{ $opd->id == $item->opd_id ? 'selected' : '' }}>
                                                                                {{ $opd->nama }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="nip" class="form-label">NIP</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nip" value="{{ $item->nip }}"
                                                                        required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Nama
                                                                        Lengkap</label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" value="{{ $item->name }}"
                                                                        required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" value="{{ $item->email }}"
                                                                        required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="phone"
                                                                        class="form-label">Telepon</label>
                                                                    <input type="text" class="form-control"
                                                                        name="phone" value="{{ $item->phone }}"
                                                                        required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="nama_jabatan" class="form-label">Nama
                                                                        Jabatan</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_jabatan"
                                                                        value="{{ $item->nama_jabatan }}" required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="role" class="form-label">Role</label>
                                                                    <select name="role" class="form-select" required>
                                                                        <option value="5"
                                                                            {{ $item->role == 5 ? 'selected' : '' }}>PPK
                                                                        </option>
                                                                        <option value="6"
                                                                            {{ $item->role == 6 ? 'selected' : '' }}>
                                                                            Bendahara</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="password" class="form-label">Password (isi
                                                                        jika ingin ubah)</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password"
                                                                        placeholder="Biarkan kosong jika tidak diubah">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary"><i
                                                                        class="fa-solid fa-save me-1"></i> Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                            </div>
                        </div>

                        <!-- Modal: Tambah Pengguna -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <form action="{{ route('manajemen_user.store') }}" method="POST">
                                    @csrf
                                    @if ($errors->has('duplicate_role'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('duplicate_role') }}
                                        </div>
                                    @endif
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createModalLabel"><i
                                                    class="fa-solid fa-plus-circle me-2"></i> Tambah Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row g-3">

                                            <div class="col-md-6">
                                                <label for="opd_id" class="form-label">Asal Instansi/OPD</label>
                                                <select name="opd_id" id="opd_id" class="form-select" required>
                                                    <option value="" disabled selected>-- Pilih OPD --</option>
                                                    @foreach ($dataOPD as $opd)
                                                        <option value="{{ $opd->id }}">{{ $opd->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="nip" class="form-label">NIP</label>
                                                <input type="text" class="form-control" name="nip" id="nip"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Telepon</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                                                <input type="text" class="form-control" name="nama_jabatan"
                                                    id="nama_jabatan" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="role" class="form-label">Role</label>
                                                <select name="role" id="role" class="form-select" required>
                                                    <option value="" disabled selected>-- Pilih Role --</option>
                                                    <option value="5">PPK</option>
                                                    <option value="6">Bendahara</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" required>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa-solid fa-save me-1"></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@section('script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal',
                        customClass: {
                            confirmButton: 'btn btn-primary text-white mx-2',
                            cancelButton: 'btn btn-secondary'
                        },
                        buttonsStyling: false // penting agar SweetAlert tidak override Bootstrap style
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#dataTable')) {
                $('#dataTable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    info: true
                });
            }
        });
    </script>


    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: 'btn btn-success'
                    }
                });
            });
        </script>
    @endif

    @if ($errors->has('duplicate_role'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById('createModal'));
                myModal.show();
            });
        </script>
    @endif



@endsection
