<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Admin')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Dashboard</p>
	<p>Selamat datang !</p>

	{{-- Card --}}
	<div class="row row-cols-1 row-cols-md-4 g-4">
		<div class="col">
		  <div class="card">
			<img src="{{ asset('assets/img/siswa.jpg') }}" class="card-img-top" alt="Foto Siswa SMK Angop">
			<div class="card-body">
			  <h5 class="card-title">Siswa SMK Angop</h5>
			  <p class="card-text">Jumlah Siswa.</p>
			  <h6 class="card-subtitle mb-2 text-muted">{{ $jumlahCalonSiswa }}</h6>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card">
			<img src="{{ asset('assets/img/room.jpg') }}" class="card-img-top" alt="Foto Ruang Kelas SMK Angop">
			<div class="card-body">
			  <h5 class="card-title">Ruang Kelas SMK Angop</h5>
			  <p class="card-text">Ruang Kelas SMK Angop.</p>
			  <h6>{{ $ruangKelas }}</h6>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card">
			<img src="{{ asset('assets/img/fishing.jpg') }}" class="card-img-top" alt="Foto Jurusan SMK Angop">
			<div class="card-body">
			  <h5 class="card-title">Jurusan SMK Angop</h5>
			  <p class="card-text">Jurusan SMK Angop.</p>
			  <h6>{{ $jurusanSMK }}</h6>
			</div>
		  </div>
		</div>
		<div class="col">
			<div class="card">
			  <img src="{{ asset('assets/img/kalender.jpg') }}" class="card-img-top" alt="Foto Jadwal Kelas SMK Angop">
			  <div class="card-body">
				<h5 class="card-title">Jadwal Pembelajaran</h5>
				<p class="card-text">Jadwal Pembelajaran SMK Angop.</p>
				<h6>{{ $jadwalSMK }}</h6>
			  </div>
			</div>
		  </div>
	  </div>

	  <div class="container">
		<div id="chartContainer"></div>
	  </div>

	 <!-- Nav Item - Messages -->
	 <li class="nav-item dropdown no-arrow mx-1">
		<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-envelope fa-fw"></i>
			<!-- Counter - Messages -->
			<span class="badge badge-danger badge-counter">7</span>
		</a>
		<!-- Dropdown - Messages -->
		<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
			aria-labelledby="messagesDropdown">
			<h6 class="dropdown-header">
				Message Center
			</h6>
			<a class="dropdown-item d-flex align-items-center" href="#">
				<div class="dropdown-list-image mr-3">
					<img class="rounded-circle" src="img/undraw_profile_1.svg"
						alt="...">
					<div class="status-indicator bg-success"></div>
				</div>
				<div class="font-weight-bold">
					<div class="text-truncate">Hi there! I am wondering if you can help me with a
						problem I've been having.</div>
					<div class="small text-gray-500">Emily Fowler · 58m</div>
				</div>
			</a>
			<a class="dropdown-item d-flex align-items-center" href="#">
				<div class="dropdown-list-image mr-3">
					<img class="rounded-circle" src="img/undraw_profile_2.svg"
						alt="...">
					<div class="status-indicator"></div>
				</div>
				<div>
					<div class="text-truncate">I have the photos that you ordered last month, how
						would you like them sent to you?</div>
					<div class="small text-gray-500">Jae Chun · 1d</div>
				</div>
			</a>
			<a class="dropdown-item d-flex align-items-center" href="#">
				<div class="dropdown-list-image mr-3">
					<img class="rounded-circle" src="img/undraw_profile_3.svg"
						alt="...">
					<div class="status-indicator bg-warning"></div>
				</div>
				<div>
					<div class="text-truncate">Last month's report looks great, I am very happy with
						the progress so far, keep up the good work!</div>
					<div class="small text-gray-500">Morgan Alvarez · 2d</div>
				</div>
			</a>
			<a class="dropdown-item d-flex align-items-center" href="#">
				<div class="dropdown-list-image mr-3">
					<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
						alt="...">
					<div class="status-indicator bg-success"></div>
				</div>
				<div>
					<div class="text-truncate">Am I a good boy? The reason I ask is because someone
						told me that people say this to all dogs, even if they aren't good...</div>
					<div class="small text-gray-500">Chicken the Dog · 2w</div>
				</div>
			</a>
			<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
		</div>
	</li>
 
@endsection 

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
var colors = Highcharts.getOptions().colors,
    categories = [
        'Laki-Laki',
        'Perempuan',
    ],
    data = [
        {
            y: 50.00,
            color: colors[2],
            drilldown: {
                name: 'Laki-Laki',
                categories: [
                    'Laki-Laki'
                ],
                data: [
                    64.00
                ]
            }
        },
        {
            y: 50.00,
            color: colors[3],
            drilldown: {
                name: 'Perempuan',
                categories: [
                    'Perempuan'
                ],
                data: [
                    36.00
                ]
            }
        },
    ],
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.color(data[i].color).brighten(brightness).get()
        });
    }
}

// Create the chart
Highcharts.chart('chartContainer', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Siswa Siswi SMK Angop',
        align: 'center'
    },
    plotOptions: {
        pie: {
            shadow: false,
            center: ['50%', '50%']
        }
    },
    tooltip: {
        valueSuffix: '%'
    },
    series: [{
        name: 'Kategori',
        data: browserData,
        size: '60%',
        dataLabels: {
            color: '#ffffff',
            distance: -30
        }
    }, {
        name: 'Presentase',
        data: versionsData,
        size: '80%',
        innerSize: '60%',
        dataLabels: {
            format: '<b>{point.name}:</b> <span style="opacity: 0.5">{y}%</span>',
            filter: {
                property: 'y',
                operator: '>',
                value: 1
            },
            style: {
                fontWeight: 'normal'
            }
        },
        id: 'versions'
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 400
            },
            chartOptions: {
                series: [{
                }, {
                    id: 'versions',
                    dataLabels: {
                        enabled: false
                    }
                }]
            }
        }]
    }
});
</script>
@endsection