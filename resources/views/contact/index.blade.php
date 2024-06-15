@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- Card Descrizione e Titolo -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-3xl font-bold uppercase tracking-wider mb-4">Contatti</h2>
                <p class="mb-4">
                    VISTA Live è un'azienda leader nel fornire webcam live per le
                    destinazioni turistiche. Il nostro obiettivo è di portare le
                    meraviglie del mondo direttamente a casa tua, attraverso immagini live
                    di alta qualità. Scopri le nostre webcam posizionate nei luoghi più
                    affascinanti e vivi l'esperienza come se fossi lì!
                </p>
                <p>
                    Siamo impegnati nell'open source, creando software scalabile per
                    migliorare l'accessibilità e la qualità dei nostri servizi.
                    Partecipiamo attivamente alla comunità open source, condividendo il
                    nostro lavoro e collaborando con sviluppatori di tutto il mondo.
                </p>
                <br>
                <div class="flex justify-center space-x-2 mb-8">
                    <a href="https://www.facebook.com/vistalive.it" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/vistalive_official/" class="flex items-center space-x-2 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600 transition-colors duration-300" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://github.com/passarelli-dev" class="flex items-center space-x-2 bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors duration-300" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        <span>Github</span>
                    </a>
                    <a href="mailto:info@vistalive.it" class="flex items-center space-x-2 bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                    </a>
                </div>
            </div>


            <!-- Sezione FAQ -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h3 class="text-2xl font-bold mb-4 text-center">Domande Frequenti</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold">Quali sono i vostri orari di apertura?</h4>
                        <p>Il nostro servizio è attivo 24 ore su 24, 7 giorni su 7.</p>
                    </div>
                    <div>
                        <h4 class="font-bold">Come posso contattare il supporto clienti?</h4>
                        <p>Puoi contattarci tramite email all'indirizzo info@vistalive.it o tramite i nostri social media.</p>
                    </div>
                    <div>
                        <h4 class="font-bold">Dove si trova la vostra sede?</h4>
                        <p>La nostra sede si trova a Vinchiaturo, in Italia.</p>
                    </div>
                </div>
            </div>

            <!-- Mappa di Google -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h3 class="text-2xl font-bold mb-4 text-center">Dove Siamo</h3>
                <div class="flex justify-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.368576858408!2d14.544356316048374!3d41.50182427925214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133a506c1154a8a3%3A0x400d5c5087b5120!2s86019%20Vinchiaturo%20CB!5e0!3m2!1sit!2sit!4v1626790825830!5m2!1sit!2sit"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection





@push('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endpush
