<br><br>
<main id="main" class="mt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1>Dashboard / Provinsi / Kota / Kecamatan</h1>
        </div>
        @include('layouts.user.bar-chart')
        <div class="row">
            <hr>
            <div class="text-center">
                <h3>Visualisasi Data {{ $data->nama }}</h3>
            </div>
            <hr>
            {{-- <div class="col-4 mb-3">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <h5>{{ $v->nama }}</h5>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
                <table class=" table display table-stripped" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPSN</th>
                            <th scope="col">Jumlah Kirim</th>
                            <th scope="col">PTK</th>
                            <th scope="col">Pegawai</th>
                            <th scope="col">pd</th>
                            <th scope="col">Rombel</th>
                            <th scope="col">Jml rk</th>
                            <th scope="col">Jml Lab</th>
                            <th scope="col">Jml Perpus</th>
                            <th scope="col">Bentuk Pendidikan</th>
                            <th scope="col">Status Sekolah</th>
                            <th scope="col">Sinkron Terakhir</th>
                            <th scope="col">Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scrap as $i => $v)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->npsn }}</td>
                                <td>{{ $v->jumlah_kirim }}</td>
                                <td>{{ $v->ptk }}</td>
                                <td>{{ $v->pegawai }}</td>
                                <td>{{ $v->pd }}</td>
                                <td>{{ $v->rombel }}</td>
                                <td>{{ $v->jml_rk }}</td>
                                <td>{{ $v->jml_lab }}</td>
                                <td>{{ $v->jml_perpus }}</td>
                                <td>{{ $v->bentuk_pendidikan }}</td>
                                <td>{{ $v->status_sekolah }}</td>
                                <td>{{ $v->sinkron_terakhir }}</td>
                                <td><a href="https://dapo.kemdikbud.go.id/getExcel/getProfilSekolah?semester_id=&sekolah_id={{ $v->sekolah_id_enkrip }}"
                                        class="btn btn-link" target="_blank">Unduh
                                        Profile</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main><!-- End #main -->
