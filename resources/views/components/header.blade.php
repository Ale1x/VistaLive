<header class="bg-[#1e293b] text-white py-4 shadow-md">
    <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2">
            <img
                alt="VISTA live logo"
                class="w-10 h-10 rounded-full"
                src="https://vistalive.it/wp-content/uploads/2022/06/Logo_512-300x300.png"
                style="aspect-ratio: 40/40; object-fit: cover;"
                width="40"
                height="40"
            />
            <span class="text-lg font-bold">Vista LIVE</span>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li>
                    <a href="{{ url('/') }}" class="hover:text-gray-400 transition-colors duration-300">Home</a>
                </li>
                <li class="relative group">
                    <a href="#" id="webcamsMenuButton" class="hover:text-gray-400 transition-colors duration-300 flex items-center">
                        Webcams <i class="fas fa-caret-down ml-2"></i>
                    </a>
                    <ul id="webcamsDropdown" class="absolute hidden group-hover:block bg-white text-black py-2 mt-1 rounded-lg shadow-lg min-w-[160px]">
                        <li>
                            <a href="{{ url('/webcams') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300 rounded-t-lg">Tutte le Webcams</a>
                        </li>
                        <li>
                            <a href="{{ url('/webcams/inRegione') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300">In Regione</a>
                        </li>
                        <li>
                            <a href="{{ url('/webcams/fuoriRegione') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300 rounded-b-lg">Fuori Regione</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/map') }}" class="hover:text-gray-400 transition-colors duration-300">Mappa</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="hover:text-gray-400 transition-colors duration-300">Contattaci</a>
                </li>
                @can('admin-access')
                    <li class="relative group">
                        <a href="#" id="adminMenuButton" class="hover:text-gray-400 transition-colors duration-300 flex items-center">
                            Admin <i class="fas fa-caret-down ml-2"></i>
                        </a>
                        <ul id="adminDropdown" class="absolute hidden group-hover:block bg-white text-black py-2 mt-1 rounded-lg shadow-lg min-w-[160px]">
                            <li>
                                <a href="{{ url('/admin') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/seo-settings') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300">Impostazioni SEO</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/statistics') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300">Statistiche</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/logs') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300">Logs</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/backups') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-300 rounded-b-lg">Backup</a>
                            </li>
                        </ul>
                    </li>
                @endcan
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const webcamsMenuButton = document.getElementById('webcamsMenuButton');
        const webcamsDropdown = document.getElementById('webcamsDropdown');
        const adminMenuButton = document.getElementById('adminMenuButton');
        const adminDropdown = document.getElementById('adminDropdown');

        webcamsMenuButton.addEventListener('mouseenter', function () {
            webcamsDropdown.classList.remove('hidden');
        });

        webcamsMenuButton.addEventListener('mouseleave', function () {
            setTimeout(function () {
                if (!webcamsDropdown.matches(':hover')) {
                    webcamsDropdown.classList.add('hidden');
                }
            }, 100);
        });

        webcamsDropdown.addEventListener('mouseleave', function () {
            webcamsDropdown.classList.add('hidden');
        });

        webcamsDropdown.addEventListener('mouseenter', function () {
            webcamsDropdown.classList.remove('hidden');
        });

        adminMenuButton.addEventListener('mouseenter', function () {
            adminDropdown.classList.remove('hidden');
        });

        adminMenuButton.addEventListener('mouseleave', function () {
            setTimeout(function () {
                if (!adminDropdown.matches(':hover')) {
                    adminDropdown.classList.add('hidden');
                }
            }, 100);
        });

        adminDropdown.addEventListener('mouseleave', function () {
            adminDropdown.classList.add('hidden');
        });

        adminDropdown.addEventListener('mouseenter', function () {
            adminDropdown.classList.remove('hidden');
        });
    });
</script>

<!-- Aggiungi il seguente stile al tuo file CSS se necessario -->
<style>
    /* Fixes for dropdown styling issues */
    .group:hover .group-hover\:block {
        display: block;
    }
</style>
