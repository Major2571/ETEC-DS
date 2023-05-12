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

    <div>
        <h1 class="text-white">
            Total de Laboratórios Cadastrados: {{ $totalLaboratorios }}
        </h1>
        <h1 class="text-white">
            Total de Reclamações Realizadas: {{ $totalReclamacoes }}
        </h1>
        <h1 class="text-white">
            Total de Contato ou Sugestões Feitos: {{ $totalContato }}
        </h1>
        <h1 class="text-white">
            Quantidade de Desenvolvedores: {{ $totalDev }}
        </h1>

        {{-- <h1 class="text-white">
            Quantidade de Reclamacoes por lab: {{ $reclamacoesPorLab }}
        </h1> --}}

        <h1 class="text-white">
            Última Reclamação: {{ $ultimaRec }}
        </h1>

        <h1 class="text-white">
            Reclamação mais antiga: {{ $antigaRec }}
        </h1>
    </div>

    <div class="flex m-auto justify-center">
        <div class="chart-wrapper bg-slate-200 p-5 ">
            <canvas id="reclamacoesPorLab"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('reclamacoesPorLab').getContext('2d');

        var data = @json($reclamacoesPorLab);

        var lab = data.map(function(item) {
            return item.laboratorio;
        });

        var recLaboratorios = data.map(function(item) {
            return item.total;
        });

        var chart = new Chart(ctx, {
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
