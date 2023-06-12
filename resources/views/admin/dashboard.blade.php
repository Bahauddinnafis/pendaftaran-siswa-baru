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

@section('grafik')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	var colors = Highcharts.getOptions().colors,
    categories = [
        'Chrome',
        'Safari',
        'Edge',
        'Firefox',
        'Other'
    ],
    data = [
        {
            y: 61.04,
            color: colors[2],
            drilldown: {
                name: 'Chrome',
                categories: [
                    'Chrome v97.0',
                    'Chrome v96.0',
                    'Chrome v95.0',
                    'Chrome v94.0',
                    'Chrome v93.0',
                    'Chrome v92.0',
                    'Chrome v91.0',
                    'Chrome v90.0',
                    'Chrome v89.0',
                    'Chrome v88.0',
                    'Chrome v87.0',
                    'Chrome v86.0',
                    'Chrome v85.0',
                    'Chrome v84.0',
                    'Chrome v83.0',
                    'Chrome v81.0',
                    'Chrome v89.0',
                    'Chrome v79.0',
                    'Chrome v78.0',
                    'Chrome v76.0',
                    'Chrome v75.0',
                    'Chrome v72.0',
                    'Chrome v70.0',
                    'Chrome v69.0',
                    'Chrome v56.0',
                    'Chrome v49.0'
                ],
                data: [
                    36.89,
                    18.16,
                    0.54,
                    0.7,
                    0.8,
                    0.41,
                    0.31,
                    0.13,
                    0.14,
                    0.1,
                    0.35,
                    0.17,
                    0.18,
                    0.17,
                    0.21,
                    0.1,
                    0.16,
                    0.43,
                    0.11,
                    0.16,
                    0.15,
                    0.14,
                    0.11,
                    0.13,
                    0.12
                ]
            }
        },
        {
            y: 9.47,
            color: colors[3],
            drilldown: {
                name: 'Safari',
                categories: [
                    'Safari v15.3',
                    'Safari v15.2',
                    'Safari v15.1',
                    'Safari v15.0',
                    'Safari v14.1',
                    'Safari v14.0',
                    'Safari v13.1',
                    'Safari v13.0',
                    'Safari v12.1'
                ],
                data: [
                    0.1,
                    2.01,
                    2.29,
                    0.49,
                    2.48,
                    0.64,
                    1.17,
                    0.13,
                    0.16
                ]
            }
        },
        {
            y: 9.32,
            color: colors[5],
            drilldown: {
                name: 'Edge',
                categories: [
                    'Edge v97',
                    'Edge v96',
                    'Edge v95'
                ],
                data: [
                    6.62,
                    2.55,
                    0.15
                ]
            }
        },
        {
            y: 8.15,
            color: colors[1],
            drilldown: {
                name: 'Firefox',
                categories: [
                    'Firefox v96.0',
                    'Firefox v95.0',
                    'Firefox v94.0',
                    'Firefox v91.0',
                    'Firefox v78.0',
                    'Firefox v52.0'
                ],
                data: [
                    4.17,
                    3.33,
                    0.11,
                    0.23,
                    0.16,
                    0.15
                ]
            }
        },
        {
            y: 11.02,
            color: colors[6],
            drilldown: {
                name: 'Other',
                categories: [
                    'Other'
                ],
                data: [
                    11.02
                ]
            }
        }
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
        text: 'Siswa - Siswi SMK Angop',
        align: 'left'
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
        name: 'Browsers',
        data: browserData,
        size: '60%',
        dataLabels: {
            color: '#ffffff',
            distance: -30
        }
    }, {
        name: 'Versions',
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