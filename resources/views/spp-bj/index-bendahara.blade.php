@extends('layouts.navbar')
@section('title', 'Surat Permintaan Pembayaran - UP (Uang Persediaan)')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Surat Permintaan Pembayaran- Barang Jasa</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('bendahara.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">SPP-BJ (Barang Jasa)</li>
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
                                <h5 class="mb-0">Tabel Surat Permintaan Pembayaran - Barang Jasa</h5>
                                {{-- <div class="card-header-right ms-auto">
                                    <ul class="list-unstyled card-option d-flex mb-0 gap-2">
                                        <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                        <li><i class="view-html fa-solid fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div> --}}
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
                                            <th>Status</th>                                            
                                            <th>No SPP</th>
                                            <th>No Kontrak</th>
                                            <th>Tgl Kontrak</th>
                                            <th>No SPMK</th>
                                            <th>Tgl SPMK</th>
                                            <th>No SPPBJ</th>
                                            <th>Tgl SPPBJ</th>
                                            <th>Nama Perusahaan</th>
                                            {{-- <th>Alamat</th> --}}
                                            {{-- <th>Nama Bank</th> --}}
                                            <th>Nilai Kontrak</th>
                                            {{-- <th>Keterangan</th> --}}
                                            {{-- <th>Waktu Pelaksanaan</th> --}}
                                            <th>Tanggal Penyelesaian</th>
                                            {{-- <th>File Kontrak</th>
                                            <th>File SPMK</th>
                                            <th>File SPPBJ</th>
                                            <th>File BAP</th>
                                            <th>File BA-Pemeriksaan</th>
                                            <th>File Lap. Kemajuan</th>
                                            <th>File Dokumentasi</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @switch($item->status)
                                                        @case(1)
                                                            <span class="badge bg-info">Verifikasi PPK</span>
                                                        @break

                                                        @case(2)
                                                            <span class="badge bg-primary">Verifikasi Verifikator BKAD</span>
                                                        @break

                                                        @case(3)
                                                            <span class="badge bg-warning text-dark">Verifikasi Kuasa BUD</span>
                                                        @break

                                                        @case(4)
                                                            <span class="badge bg-success">SPD2 Terbit</span>
                                                        @break

                                                        @case(5)
                                                            <span class="badge bg-danger">Revisi Usulan</span>
                                                        @break

                                                        @default
                                                            <span class="badge bg-secondary">Belum Diverifikasi</span>
                                                    @endswitch
                                                </td>
                                                
                                                <td>{{ $item->nomor }}</td>
                                                <td>{{ $item->kontrak_nomor }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->kontrak_tgl)->translatedFormat('d F Y') }}
                                                </td>
                                                <td>{{ $item->spmk_nomor }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->spmk_tgl)->translatedFormat('d F Y') }}
                                                </td>
                                                <td>{{ $item->sppbj_nomor }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->sppbj_tgl)->translatedFormat('d F Y') }}
                                                </td>
                                                <td>{{ $item->perusahaan_nama }}</td>
                                                {{-- <td>{{ $item->perusahaan_alamat }}</td> --}}
                                                {{-- <td>{{ $item->perusahaan_bank }}</td> --}}
                                                <td>Rp{{ number_format($item->kontrak_nilai, 0, ',', '.') }}</td>

                                                {{-- <td>{{ $item->keterangan }}</td> --}}
                                                {{-- <td>{{ $item->waktu_pelaksanaan }}</td> --}}
                                                <td>{{ \Carbon\Carbon::parse($item->tgl_penyelesaian)->translatedFormat('d F Y') }}
                                                </td>

                                                {{-- File Kontrak --}}
                                                {{-- <td>
                                                    @if ($item->file_kontrak)
                                                        <a href="{{ asset('storage/' . $item->file_kontrak) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}
                                                <!-- File SPMK -->
                                                {{-- <td>
                                                    @if ($item->file_spmk)
                                                        <a href="{{ asset('storage/' . $item->file_spmk) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}

                                                <!-- File SPPBJ -->
                                                {{-- <td>
                                                    @if ($item->file_sppbj)
                                                        <a href="{{ asset('storage/' . $item->file_sppbj) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}

                                                <!-- File BAP -->
                                                {{-- <td>
                                                    @if ($item->file_bap)
                                                        <a href="{{ asset('storage/' . $item->file_bap) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}

                                                <!-- File BA Pemeriksaan -->
                                                {{-- <td>
                                                    @if ($item->file_ba_pemeriksaan)
                                                        <a href="{{ asset('storage/' . $item->file_ba_pemeriksaan) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}

                                                <!-- File Laporan Kemajuan -->
                                                {{-- <td>
                                                    @if ($item->file_lap_kemajuan)
                                                        <a href="{{ asset('storage/' . $item->file_lap_kemajuan) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}

                                                <!-- File Dokumentasi -->
                                                {{-- <td>
                                                    @if ($item->file_dokumentasi)
                                                        <a href="{{ asset('storage/' . $item->file_dokumentasi) }}"
                                                            target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger fa-lg"></i>
                                                        </a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td> --}}
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        
                                                        {{-- Tombol Info --}}
                                                        <button type="button" class="btn btn-sm btn-success"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#infoModal{{ $item->id }}">
                                                            <i class="fa-solid fa-circle-info"></i>
                                                        </button>
                                                        {{-- Tombol Edit --}}
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $item->id }}">
                                                            <i class="fa-regular fa-pen-to-square"></i>
                                                        </button>


                                                        {{-- Tombol Hapus --}}
                                                        <form action="{{ route('spp-bj.destroy', $item->id) }}"
                                                            method="POST" class="form-delete d-inline"
                                                            data-id="{{ $item->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-danger btn-delete">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                            </div>
                        </div>
                        <!-- Modal Info -->
                        <div class="modal fade" id="infoModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="infoModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header text-dark">
                                        <h5 class="modal-title" id="infoModalLabel{{ $item->id }}">Detail Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-3">

                                            <div class="col-md-6"><strong>Status:</strong><br>
                                                @switch($item->status)
                                                    @case(1)
                                                        Verifikasi PPK
                                                    @break

                                                    @case(2)
                                                        Verifikasi Verifikator BKAD
                                                    @break

                                                    @case(3)
                                                        Verifikasi Kuasa BUD
                                                    @break

                                                    @case(4)
                                                        SPD2 Terbit
                                                    @break

                                                    @case(5)
                                                        Revisi Usulan
                                                    @break

                                                    @default
                                                        Belum Diverifikasi
                                                @endswitch
                                            </div>

                                            <div class="col-md-6"><strong>No SPP:</strong><br>{{ $item->nomor }}</div>
                                            <div class="col-md-6"><strong>No
                                                    Kontrak:</strong><br>{{ $item->kontrak_nomor }}</div>
                                            <div class="col-md-6"><strong>Tgl
                                                    Kontrak:</strong><br>{{ \Carbon\Carbon::parse($item->kontrak_tgl)->translatedFormat('d F Y') }}
                                            </div>
                                            <div class="col-md-6"><strong>No SPMK:</strong><br>{{ $item->spmk_nomor }}
                                            </div>
                                            <div class="col-md-6"><strong>Tgl
                                                    SPMK:</strong><br>{{ \Carbon\Carbon::parse($item->spmk_tgl)->translatedFormat('d F Y') }}
                                            </div>
                                            <div class="col-md-6"><strong>No SPPBJ:</strong><br>{{ $item->sppbj_nomor }}
                                            </div>
                                            <div class="col-md-6"><strong>Tgl
                                                    SPPBJ:</strong><br>{{ \Carbon\Carbon::parse($item->sppbj_tgl)->translatedFormat('d F Y') }}
                                            </div>
                                            <div class="col-md-6"><strong>Nama
                                                    Perusahaan:</strong><br>{{ $item->perusahaan_nama }}</div>
                                            <div class="col-md-6">
                                                <strong>Alamat:</strong><br>{{ $item->perusahaan_alamat }}</div>
                                            <div class="col-md-6"><strong>Nama
                                                    Bank:</strong><br>{{ $item->perusahaan_bank }}</div>
                                            <div class="col-md-6"><strong>Nilai
                                                    Kontrak:</strong><br>Rp{{ number_format($item->kontrak_nilai, 0, ',', '.') }}
                                            </div>
                                            <div class="col-md-6"><strong>Keterangan:</strong><br>{{ $item->keterangan }}
                                            </div>
                                            <div class="col-md-6"><strong>Waktu
                                                    Pelaksanaan:</strong><br>{{ $item->waktu_pelaksanaan }} hari</div>
                                            <div class="col-md-6"><strong>Tgl
                                                    Penyelesaian:</strong><br>{{ \Carbon\Carbon::parse($item->tgl_penyelesaian)->translatedFormat('d F Y') }}
                                            </div>

                                            {{-- File-file --}}
                                            @php
                                                $files = [
                                                    'file_kontrak' => 'File Kontrak',
                                                    'file_spmk' => 'File SPMK',
                                                    'file_sppbj' => 'File SPPBJ',
                                                    'file_bap' => 'File BAP',
                                                    'file_ba_pemeriksaan' => 'File BA Pemeriksaan',
                                                    'file_lap_kemajuan' => 'File Laporan Kemajuan',
                                                    'file_dokumentasi' => 'File Dokumentasi',
                                                ];
                                            @endphp

                                            @foreach ($files as $key => $label)
                                                <div class="col-md-6">
                                                    <strong>{{ $label }}:</strong><br>
                                                    @if ($item->$key)
                                                        <a href="{{ asset('storage/' . $item->$key) }}" target="_blank">
                                                            <i class="fa-solid fa-file-pdf text-danger"></i> Lihat Dokumen
                                                        </a>
                                                    @else
                                                        <span class="text-muted">Tidak ada</span>
                                                    @endif
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <form action="{{ route('spp-bj.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Data Kontrak</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body row">
                                            <!-- Input Text dan Tanggal -->
                                            <div class="col-md-4 mb-3">
                                                <label>No. SPP</label>
                                                <input type="text" name="nomor" class="form-control" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>No Kontrak</label>
                                                <input type="text" name="kontrak_nomor" class="form-control" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Tanggal Kontrak</label>
                                                <input type="date" name="kontrak_tgl" class="form-control" required>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label>No SPMK</label>
                                                <input type="text" name="spmk_nomor" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Tanggal SPMK</label>
                                                <input type="date" name="spmk_tgl" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>No SPPBJ</label>
                                                <input type="text" name="sppbj_nomor" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Tanggal SPPBJ</label>
                                                <input type="date" name="sppbj_tgl" class="form-control">
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="perusahaan_nama" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Alamat Perusahaan</label>
                                                <input type="text" name="perusahaan_alamat" class="form-control">
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label>Bank Perusahaan</label>
                                                <input type="text" name="perusahaan_bank" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Nilai Kontrak</label>
                                                <input type="number" name="kontrak_nilai" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Waktu Pelaksanaan (hari)</label>
                                                <input type="number" name="waktu_pelaksanaan" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>Tanggal Penyelesaian</label>
                                                <input type="date" name="tgl_penyelesaian" class="form-control">
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>Keterangan</label>
                                                <textarea name="keterangan" class="form-control" rows="2"></textarea>
                                            </div>

                                            <!-- File Upload Manual (tanpa loop) -->
                                            <div class="col-md-6 mb-3">
                                                <label>File Kontrak (PDF)</label>
                                                <input type="file" name="file_kontrak" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File SPMK (PDF)</label>
                                                <input type="file" name="file_spmk" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File SPPBJ (PDF)</label>
                                                <input type="file" name="file_sppbj" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File BAP (PDF)</label>
                                                <input type="file" name="file_bap" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File BA Pemeriksaan (PDF)</label>
                                                <input type="file" name="file_ba_pemeriksaan" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File Laporan Kemajuan (PDF)</label>
                                                <input type="file" name="file_lap_kemajuan" class="form-control"
                                                    accept="application/pdf">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>File Dokumentasi (PDF)</label>
                                                <input type="file" name="file_dokumentasi" class="form-control"
                                                    accept="application/pdf">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- Modal Update --}}
                        @foreach ($data as $item)
                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form action="{{ route('spp-bj.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Data Kontrak</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body row">
                                                <div class="col-md-4 mb-3">
                                                    <label>No. SPP</label>
                                                    <input type="text" name="nomor" class="form-control"
                                                        value="{{ $item->nomor }}" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>No Kontrak</label>
                                                    <input type="text" name="kontrak_nomor" class="form-control"
                                                        value="{{ $item->kontrak_nomor }}" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal Kontrak</label>
                                                    <input type="date" name="kontrak_tgl" class="form-control"
                                                        value="{{ $item->kontrak_tgl }}" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>No SPMK</label>
                                                    <input type="text" name="spmk_nomor" class="form-control"
                                                        value="{{ $item->spmk_nomor }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal SPMK</label>
                                                    <input type="date" name="spmk_tgl" class="form-control"
                                                        value="{{ $item->spmk_tgl }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>No SPPBJ</label>
                                                    <input type="text" name="sppbj_nomor" class="form-control"
                                                        value="{{ $item->sppbj_nomor }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal SPPBJ</label>
                                                    <input type="date" name="sppbj_tgl" class="form-control"
                                                        value="{{ $item->sppbj_tgl }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Nama Perusahaan</label>
                                                    <input type="text" name="perusahaan_nama" class="form-control"
                                                        value="{{ $item->perusahaan_nama }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Alamat Perusahaan</label>
                                                    <input type="text" name="perusahaan_alamat" class="form-control"
                                                        value="{{ $item->perusahaan_alamat }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Bank Perusahaan</label>
                                                    <input type="text" name="perusahaan_bank" class="form-control"
                                                        value="{{ $item->perusahaan_bank }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Nilai Kontrak</label>
                                                    <input type="number" name="kontrak_nilai" class="form-control"
                                                        value="{{ $item->kontrak_nilai }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Waktu Pelaksanaan (hari)</label>
                                                    <input type="number" name="waktu_pelaksanaan" class="form-control"
                                                        value="{{ $item->waktu_pelaksanaan }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal Penyelesaian</label>
                                                    <input type="date" name="tgl_penyelesaian" class="form-control"
                                                        value="{{ $item->tgl_penyelesaian }}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label>Keterangan</label>
                                                    <textarea name="keterangan" class="form-control" rows="2">{{ $item->keterangan }}</textarea>
                                                </div>

                                                {{-- File Upload --}}
                                                <div class="col-md-6 mb-3">
                                                    <label>File Kontrak (PDF)</label>
                                                    <input type="file" name="file_kontrak" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File SPMK (PDF)</label>
                                                    <input type="file" name="file_spmk" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File SPPBJ (PDF)</label>
                                                    <input type="file" name="file_sppbj" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File BAP (PDF)</label>
                                                    <input type="file" name="file_bap" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File BA Pemeriksaan (PDF)</label>
                                                    <input type="file" name="file_ba_pemeriksaan" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File Laporan Kemajuan (PDF)</label>
                                                    <input type="file" name="file_lap_kemajuan" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>File Dokumentasi (PDF)</label>
                                                    <input type="file" name="file_dokumentasi" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach




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


@endsection
