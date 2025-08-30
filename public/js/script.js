// Copyright 2025 ariefsetyonugroho
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//     https://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// const { response } = require("express");

// SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})




// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})

// Fungsi untuk toggle sidebar otomatis di mobile
function handleSidebarResponsive() {
    if (window.innerWidth <= 768) { // threshold mobile
        if (!sidebar.classList.contains('hide')) {
            sidebar.classList.add('hide');

            // Update divider dan dropdown
            allSideDivider.forEach(item => item.textContent = '-');
            allDropdown.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            });
        }
    } else {
        // Jika layar lebih besar, buka sidebar dan restore teks divider
        if (sidebar.classList.contains('hide')) {
            sidebar.classList.remove('hide');
            allSideDivider.forEach(item => item.textContent = item.dataset.text);
        }
    }
}

// Jalankan saat load
window.addEventListener('load', handleSidebarResponsive);

// Jalankan saat resize
window.addEventListener('resize', handleSidebarResponsive);






// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})

// APEXCHART
var chartPh, chartDo, chartTemp;

if (document.querySelector("#chart")) {
  chartPh = new ApexCharts(document.querySelector("#chart"), {
    series: [{ name: 'pH', data: [] }],
    chart: { height: 350, type: 'line', animations: { enabled: true, dynamicAnimation: { speed: 1000 } } },
    xaxis: { type: 'datetime' },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth' },
    tooltip: { x: { format: 'HH:mm:ss' } }
  });
  chartPh.render();
}

if (document.querySelector("#chart2")) {
  chartDo = new ApexCharts(document.querySelector("#chart2"), {
    series: [{ name: 'DO', data: [] }],
    chart: { height: 350, type: 'line', animations: { enabled: true, dynamicAnimation: { speed: 1000 } } },
    xaxis: { type: 'datetime' },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth' },
    tooltip: { x: { format: 'HH:mm:ss' } }
  });
  chartDo.render();
}

if (document.querySelector("#chart3")) {
  chartTemp = new ApexCharts(document.querySelector("#chart3"), {
    series: [{ name: 'Suhu', data: [] }],
    chart: { height: 350, type: 'line', animations: { enabled: true, dynamicAnimation: { speed: 1000 } } },
    xaxis: { type: 'datetime' },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth' },
    tooltip: { x: { format: 'HH:mm:ss' } }
  });
  chartTemp.render();
}

// Fungsi update data chart
function updateCharts(sensor) {
  const now = new Date().getTime();
  if (chartPh) chartPh.appendData([{ data: [{ x: now, y: parseFloat(sensor.ph) }] }]);
  if (chartDo) chartDo.appendData([{ data: [{ x: now, y: parseFloat(sensor.do) }] }]);
  if (chartTemp) chartTemp.appendData([{ data: [{ x: now, y: parseFloat(sensor.temp) }] }]);
}

// ===== AJAX Polling untuk update sensor =====
// Fungsi convert data ke format ApexCharts
function mapSensorDataForChart(sensorArray, key) {
    return sensorArray.map(item => ({
        x: new Date(item.created_at).getTime(), // pakai timestamp
        y: parseFloat(item[key])
    }));
}

// Fetch sensor terbaru + update chart
function fetchLatestSensor() {
    fetch('/api/sensors')
    .then(response => response.json())
    .then(res => {
        console.log('Response dari API:', res); 
        if (res.success && res.data && res.data.data && res.data.data.length > 0) {
            const sensors = res.data.data;

            // Update nilai text terakhir
            const last = sensors[0];
			const phEl = document.getElementById('ph-value');
			const doEl = document.getElementById('do-value');
			const tempEl = document.getElementById('temp-value');
			const aeratorEl = document.getElementById('aerator-value');

			if (phEl) phEl.textContent = last.ph;
			if (doEl) doEl.textContent = last.do;
			if (tempEl) tempEl.textContent = last.temp;
			if (aeratorEl) aeratorEl.textContent = last.aerator

            // Update chart dengan semua data
            if (chartPh) chartPh.updateSeries([{ data: mapSensorDataForChart(sensors, 'ph') }]);
        	if (chartDo) chartDo.updateSeries([{ data: mapSensorDataForChart(sensors, 'do') }]);
        	if (chartTemp) chartTemp.updateSeries([{ data: mapSensorDataForChart(sensors, 'temp') }]);
        } else {
            console.warn('Data sensor kosong.');
        }
    })
    .catch(err => {
       console.error('Gagal mengambil data sensor:', err);
	    alert('Gagal mengambil data sensor. Periksa koneksi atau server Anda.');
    });
}

// Interval untuk data sensor
setInterval(fetchLatestSensor, 3000);
fetchLatestSensor();


