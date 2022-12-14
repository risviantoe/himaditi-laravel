@extends('backend.app')
@section('title' , 'Dashboard | HIMADITI')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container-fluid" style="padding: 0">
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin/dashboard">Home</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="/admin/dashboard/pengguna">Data Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard/pendaftar">Data Pendaftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-section my-3 mb-5">
    <div class="section section-chart px-4 py-4">
        <h6>Grafik Pengguna dan Pendaftar</h6>
        <div class="line mb-4"></div>
        <canvas class="col-12" id="chart"></canvas>
    </div>
    <div class="container-pengguna">
        <div class="section section-pengguna mb-3 px-4 py-4">
            <h6>Jumlah Pengguna</h6>
            <div class="line mb-4"></div>
            <div class="d-flex justify-content-center">
                <div class="circle jml-pengguna">
                    {{ $jmlUser }}
                </div>
            </div>
        </div>
        <div class="section section-pengguna px-4 py-4">
            <h6>Jumlah Pendaftar</h6>
            <div class="line mb-4"></div>
            <div class="d-flex justify-content-center">
                <div class="circle jml-pendaftar">
                    {{ $jmlAspirasi }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section col-12 mb-5 px-4 py-4">
    <h6>Data User &nbsp; <a class="link" href="/dashboard/{dashboard}/user"><i class="bi bi-box-arrow-up-right"></i></a></h6>
    <div class="line mb-4"></div>
    <table class="table table-striped table-borderless table-hover">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Role</th>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>
                        @if ($item->role === 1)
                            <label class="badge lolos">Super Admin</label>
                        @else
                            <label class="badge proses">Admin</label>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="section col-12 px-4 py-4">
    <h6>Data Pendaftar &nbsp; <a class="link" href="/admin/dashboard/pendaftar"><i class="bi bi-box-arrow-up-right"></i></a></i></h6>
    <div class="line mb-4"></div>
    <table class="table table-striped table-borderless table-hover">
        <thead>
            <th>No</th>
            <th>No Pendaftaran</th>
            <th>Nama</th>
            <th>Jurusan Dipilih</th>
            <th style="text-align: center">Rata-rata</th>
            <th>Status</th>
        </thead>
        <tbody>
            @foreach ($aspirasi as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td style="font-weight: 600">{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jurusan_pilihan }}</td>
                    <td style="text-align: center">{{ $item->rata_rata }}</td>
                    <td>
                        <span class="badge rounded-pill
                        @if ($item->status === 'Proses Seleksi')
                            proses
                        @elseif ($item->status === 'Diterima')
                            lolos
                        @elseif ($item->status === 'Belum Diterima')
                            tdk-lolos
                        @else
                            cadangan
                        @endif
                        ">
                            {{ $item->status }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['sen', 'sel', 'rab', 'kam', 'jum', 'sab', 'min'],
            datasets: [
                {
                    backgroundColor: ['rgba(55, 81, 126, 0.2)'],
                    borderColor: ['rgba(55, 81, 126, 1)'],
                    label: 'Pengguna',
                    data: @php echo json_encode($chartUser); @endphp
                },
                {
                    backgroundColor: ['rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(255, 206, 86, 1)'],
                    label: 'Pendaftar',
                    data: @php echo json_encode($chartAspirasi); @endphp
                },
            ],
            options: {
                animation: {
                    onProgress: function(animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
                    }
                }
            }
        },
    });
</script>

@endsection
