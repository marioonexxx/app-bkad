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
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display table-striped border" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Status</th>
                                            <th>No SPP</th>
                                            <th>Tgl SPP</th>
                                            <th>No Kontrak</th>
                                            <th>Tgl Kontrak</th>
                                            <th>No SPMK</th>
                                            <th>Tgl SPMK</th>
                                            <th>No SPPBJ</th>
                                            <th>Tgl SPPBJ</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>Nama Bank</th>
                                            <th>Rekening Bank</th>
                                            <th>Nilai Kontrak</th>
                                            <th>Keterangan</th>
                                            <th>Waktu Pelaksanaan</th>
                                            <th>Tanggal Penyelesaian</th>
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
                                                            <span class="badge bg-primary">SPM Telah Dibuat - <br> Menunggu
                                                                Verifikator BKAD</span>
                                                        @break

                                                        @case(3)
                                                            <span class="badge bg-warning text-dark">Verifikasi Kuasa BUD</span>
                                                        @break

                                                        @case(4)
                                                            <span class="badge bg-success">SPD2 Terbit</span>
                                                        @break

                                                        @default
                                                            <span class="badge bg-secondary">Belum Diverifikasi</span>
                                                    @endswitch
                                                </td>

                                                <td>{{ $item->spp_nomor }}</td>
                                                <td>{{ $item->spp_tgl }}</td>
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
                                                <td>{{ $item->perusahaan_alamat }}</td>
                                                <td>{{ $item->perusahaan_bank }}</td>
                                                <td>{{ $item->perusahaan_rekening }}</td>
                                                <td>Rp {{ number_format($item->kontrak_nilai, 0, ',', '.') }}</td>

                                                <td>{{ $item->keterangan }}</td>
                                                <td>{{ $item->waktu_pelaksanaan }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->tgl_penyelesaian)->translatedFormat('d F Y') }}
                                                </td>

                                                <td>
                                                    <div class="d-flex gap-2">
                                                        {{-- Tombol Info --}}
                                                        <button type="button" class="btn btn-sm btn-success"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#infoModal{{ $item->id }}">
                                                            <i class="fa-solid fa-circle-info"></i>
                                                        </button>



                                                        <!-- Tombol Create SPM -->
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#createSpmModal{{ $item->id }}">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </button>

                                                        <!-- Tombol Tolak SPP -->
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#tolakModal{{ $item->id }}">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>


                                                    </div>
                                                </td>
                                            </tr>


                                            {{-- Modal Tolak SPP - Khusus untuk $item --}}
                                            <div class="modal fade" id="tolakModal{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="tolakModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('ppk.spp-bj.reject', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="spp_id" value="{{ $item->id }}">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="tolakModalLabel{{ $item->id }}">Tolak :
                                                                    {{ $item->nomor }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="notes{{ $item->id }}"
                                                                        class="form-label">Alasan Penolakan</label>
                                                                    <textarea name="notes" class="form-control" id="notes{{ $item->id }}" rows="3" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fa-solid fa-paper-plane me-1"></i> Kirim
                                                                    Penolakan
                                                                </button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach

                                    </tbody>
                                </table>

                                {{-- CREATE SPM --}}
                                @foreach ($data as $item)
                                    <div class="modal fade" id="createSpmModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="spmModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-xl">

                                            <form action="{{ route('ppk.spp-bj.create_spm', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- WAJIB agar form bisa akses route PUT -->

                                                <input type="hidden" name="spp_id" value="{{ $item->id }}">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="spmModalLabel{{ $item->id }}">Buat
                                                            SPM -
                                                            {{ $item->nomor }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Tutup"></button>
                                                    </div>

                                                    <div class="modal-body row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Nomor SPM</label>
                                                            <input type="text" class="form-control" name="spm_nomor"
                                                                required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Tanggal SPM</label>
                                                            <input type="date" class="form-control" name="spm_tgl"
                                                                required>
                                                        </div>

                                                        <div class="col-md-12 mb-3">
                                                            <label class="form-label">Upload SPM (PDF)</label>
                                                            <input type="file" class="form-control" name="file_spm"
                                                                accept="application/pdf" required>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fa-solid fa-paper-plane me-1"></i> Simpan
                                                        </button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                              
                                <!-- Modal Info -->
                                @foreach ($data as $item)
                                    <div class="modal fade" id="infoModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="infoModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header text-dark">
                                                    <h5 class="modal-title" id="infoModalLabel{{ $item->id }}">Detail
                                                        Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Tutup"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row g-3">

                                                        <div class="col-md-6">
                                                            <strong>Status:</strong><br>
                                                            @switch($item->status)
                                                                @case(1)
                                                                    <span class="badge bg-info">Verifikasi PPK</span>
                                                                @break

                                                                @case(2)
                                                                    <span class="badge bg-primary">Verifikasi Verifikator
                                                                        BKAD</span>
                                                                @break

                                                                @case(3)
                                                                    <span class="badge bg-warning text-dark">Verifikasi Kuasa
                                                                        BUD</span>
                                                                @break

                                                                @case(4)
                                                                    <span class="badge bg-success">SPD2 Terbit</span>
                                                                @break

                                                                @case(5)
                                                                    <span class="badge bg-danger">Revisi Usulan</span><br>
                                                                    <strong class="text-danger">Catatan Revisi:</strong><br>
                                                                    <span class="text-muted">{{ $item->notes }}</span>
                                                                @break

                                                                @default
                                                                    <span class="badge bg-secondary">Belum Diverifikasi</span>
                                                            @endswitch
                                                        </div>


                                                        <div class="col-md-6"><strong>No
                                                                SPP:</strong><br>{{ $item->spp_nomor }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Tgl
                                                                SPP:</strong><br>{{ $item->spp_tgl }}
                                                        </div>
                                                        <div class="col-md-6"><strong>No
                                                                Kontrak:</strong><br>{{ $item->kontrak_nomor }}</div>
                                                        <div class="col-md-6"><strong>Tgl
                                                                Kontrak:</strong><br>{{ \Carbon\Carbon::parse($item->kontrak_tgl)->translatedFormat('d F Y') }}
                                                        </div>
                                                        <div class="col-md-6"><strong>No
                                                                SPMK:</strong><br>{{ $item->spmk_nomor }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Tgl
                                                                SPMK:</strong><br>{{ \Carbon\Carbon::parse($item->spmk_tgl)->translatedFormat('d F Y') }}
                                                        </div>
                                                        <div class="col-md-6"><strong>No
                                                                SPPBJ:</strong><br>{{ $item->sppbj_nomor }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Tgl
                                                                SPPBJ:</strong><br>{{ \Carbon\Carbon::parse($item->sppbj_tgl)->translatedFormat('d F Y') }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Nama
                                                                Perusahaan:</strong><br>{{ $item->perusahaan_nama }}</div>
                                                        <div class="col-md-6">
                                                            <strong>Alamat:</strong><br>{{ $item->perusahaan_alamat }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Nama
                                                                Bank:</strong><br>{{ $item->perusahaan_bank }}</div>
                                                        <div class="col-md-6"><strong>Rekening
                                                                Bank:</strong><br>{{ $item->perusahaan_rekening }}</div>
                                                        <div class="col-md-6"><strong>Nilai
                                                                Kontrak:</strong><br>Rp{{ number_format($item->kontrak_nilai, 0, ',', '.') }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Keterangan:</strong><br>{{ $item->keterangan }}
                                                        </div>
                                                        <div class="col-md-6"><strong>Waktu
                                                                Pelaksanaan:</strong><br>{{ $item->waktu_pelaksanaan }}
                                                            hari</div>
                                                        <div class="col-md-6"><strong>Tgl
                                                                Penyelesaian:</strong><br>{{ \Carbon\Carbon::parse($item->tgl_penyelesaian)->translatedFormat('d F Y') }}
                                                        </div>

                                                        {{-- File-file --}}
                                                        @php
                                                            $files = [
                                                                'file_spp' => 'File SPP',
                                                                'file_kontrak' => 'File Kontrak',
                                                                'file_spmk' => 'File SPMK',
                                                                'file_sppbj' => 'File SPPBJ',
                                                                'file_bap' => 'File BAP',
                                                                'file_ba_pemeriksaan' => 'File BA Pemeriksaan',
                                                                'file_lap_kemajuan' => 'File Laporan Kemajuan',
                                                                'file_dokumentasi' => 'File Dokumentasi',
                                                                'file_rekening' => 'File Rekening Koran',
                                                            ];
                                                        @endphp

                                                        @foreach ($files as $key => $label)
                                                            <div class="col-md-6">
                                                                <strong>{{ $label }}:</strong><br>
                                                                @if ($item->$key)
                                                                    <a href="{{ asset('storage/' . $item->$key) }}"
                                                                        target="_blank">
                                                                        <i class="fa-solid fa-file-pdf text-danger"></i>
                                                                        Lihat
                                                                        Dokumen
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
                                @endforeach



                            </div>

                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>

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


@endsection
