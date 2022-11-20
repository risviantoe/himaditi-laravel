@extends('backend.app')
@section('title' , 'Data User | HIMADITI')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container-fluid" style="padding: 0">
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">Home</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link active" aria-current="page" href="/admin/dashboard/pengguna">Data Pengguna</a>
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
        <h6>Grafik Pengguna</h6>
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
    </div>
</div>
<div class="section col-12 mb-5 px-4 py-4">
    <div class="d-flex justify-content-between">
        <div class="table-title">
            <h6>Data Pengguna &nbsp; <a class="link" href="/dashboard/{dashboard}/user/create"><i class="bi bi-plus-square"></i></a></h6>
            <div class="line mb-4"></div>
        </div>
        <div class="search px-3">
            <form action="/admin/dashboard/pengguna">
                <div class="input-group mb-3">
                    <input name="search" id="search" type="text" class="form-control" placeholder="Cari.." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" id="button-search"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped table-borderless table-hover mb-4">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th style="text-align: center">Jenis Kelamin</th>
            <th>Role</th>
            <th>Dibuat</th>
            <th>Diubah</th>
            <th style="text-align: center">Action</th>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td style="text-align: center">{{ $item->gender }}</td>
                    <td>
                        @if ($item->role === 1)
                            <label class="badge lolos">Super Admin</label>
                        @else
                            <label class="badge proses">Admin</label>
                        @endif
                    </td>
                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->updated_at)) }}</td>
                    <td style="text-align: center">
                        <a href="pengguna/{{ $item->id }}/detail" class="btn link btn-action"><i class="bi bi-box-arrow-up-right"></i></a>
                        <a href="/admin/dashboard/pengguna/{{ $item->id }}/edit" class="btn link btn-action"><i class="bi bi-pencil-square"></i></a>
                        <form id="delete" action="/dashboard/{dashboard}/user/{{ $item->id }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn link btn-action" onclick="sweetDel(event)"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $user->links() }}
    </div>
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
                }
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
