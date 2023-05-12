<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 text-white">
                <div> Bem-Vindo(a) {{ Auth::user()->name }}!</div>
            </div>

        </div>
    </div>

    <div class="w-full flex align-center justify-center">

        <div
            class="block w-2/12 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Total de Laboratórios
                Cadastrados:</h5>
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalLaboratorios }}
            </h1>
        </div>

        <div
            class="block w-2/12 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Quantidade de
                Desenvolvedores:</h5>
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalDev }}</h1>
        </div>

        <div
            class="block w-2/12 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Total de Reclamações
                Realizadas:</h5>
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalReclamacoes }}
            </h1>
        </div>

        <div
            class="block w-2/12 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Total de Contato ou
                Sugestões Feitas:</h5>
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalContato }}</h1>
        </div>

    </div>

    <div class="w-full flex align-center justify-center">

        <div
            class="block w-1/4 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Última Reclamação:</h5>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laboratório: {{ $ultimaRec->laboratorio->laboratorio }}</h2>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pc: {{ $ultimaRec->pc }}</h2>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Feita em: {{ $ultimaRec->dtCriacao }}</h2>
        </div>
        
        <div
            class="block w-1/4 p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Reclamação mais antiga: </h5>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laboratório: {{ $antigaRec->laboratorio->laboratorio }}</h2>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pc: {{ $antigaRec->pc }}</h2>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Feita em: {{ $antigaRec->dtCriacao }}</h2>
        
        </div>

    </div>


    <div class="flex m-auto justify-center">
        <div class="chart-wrapper bg-slate-200 p-5 ">
            <canvas id="reclamacoesPorLab"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('reclamacoesPorLab').getContext('2d');

        const data = @json($reclamacoesPorLab);

        const lab = data.map(function(item) {
            return item.laboratorio;
        });

        const recLaboratorios = data.map(function(item) {
            return item.total;
        });

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: lab,
                datasets: [{
                    label: 'Reclamações por laboratório',
                    data: recLaboratorios,
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgb(255, 90, 95, 0.5)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgb(255, 90, 95, 1)',
                    ],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }]
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Reclamações por laboratório'
                }
            }
        });
    </script>

</x-app-layout>
