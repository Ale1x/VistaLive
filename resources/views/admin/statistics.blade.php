@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold mb-8">Statistiche</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Grafico visualizzazioni webcam giornaliere -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Visualizzazioni Webcam Giornaliere</h3>
                <canvas id="dailyWebcamViews"></canvas>
            </div>

            <!-- Grafico visualizzazioni webcam mensili -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Visualizzazioni Webcam Mensili</h3>
                <canvas id="monthlyWebcamViews"></canvas>
            </div>

            <!-- Grafico visualizzazioni webcam totali -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Visualizzazioni Webcam Totali</h3>
                <div class="text-3xl font-bold">{{ $totalWebcamViews }}</div>
            </div>

            <!-- Grafico visualizzazioni sito web mensili -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Visualizzazioni Sito Web Mensili</h3>
                <canvas id="monthlyWebsiteViews"></canvas>
            </div>

            <!-- Grafico visualizzazioni sito web totali -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Visualizzazioni Sito Web Totali</h3>
                <div class="text-3xl font-bold">{{ $totalWebsiteViews }}</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Prepare data for the daily webcam views chart
            const dailyWebcamViewsCtx = document.getElementById('dailyWebcamViews').getContext('2d');
            const dailyWebcamViewsData = @json($dailyViews);
            const dailyWebcamViewsLabels = dailyWebcamViewsData.map(item => item.date);
            const dailyWebcamViewsCounts = dailyWebcamViewsData.map(item => item.views);

            new Chart(dailyWebcamViewsCtx, {
                type: 'line',
                data: {
                    labels: dailyWebcamViewsLabels,
                    datasets: [{
                        label: 'Visualizzazioni Giornaliere',
                        data: dailyWebcamViewsCounts,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                }
            });

            // Prepare data for the monthly webcam views chart
            const monthlyWebcamViewsCtx = document.getElementById('monthlyWebcamViews').getContext('2d');
            const monthlyWebcamViewsData = @json($monthlyViews);
            const monthlyWebcamViewsLabels = monthlyWebcamViewsData.map(item => item.year + '-' + ('0' + item.month).slice(-2));
            const monthlyWebcamViewsCounts = monthlyWebcamViewsData.map(item => item.views);

            new Chart(monthlyWebcamViewsCtx, {
                type: 'bar',
                data: {
                    labels: monthlyWebcamViewsLabels,
                    datasets: [{
                        label: 'Visualizzazioni Mensili',
                        data: monthlyWebcamViewsCounts,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                }
            });

            // Prepare data for the monthly website views chart
            const monthlyWebsiteViewsCtx = document.getElementById('monthlyWebsiteViews').getContext('2d');
            const monthlyWebsiteViewsData = @json($monthlyWebsiteViews);
            const monthlyWebsiteViewsLabels = monthlyWebsiteViewsData.map(item => item.year + '-' + ('0' + item.month).slice(-2));
            const monthlyWebsiteViewsCounts = monthlyWebsiteViewsData.map(item => item.views);

            new Chart(monthlyWebsiteViewsCtx, {
                type: 'bar',
                data: {
                    labels: monthlyWebsiteViewsLabels,
                    datasets: [{
                        label: 'Visualizzazioni Mensili del Sito Web',
                        data: monthlyWebsiteViewsCounts,
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    }]
                }
            });
        });
    </script>
@endsection
