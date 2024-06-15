<?php

/*
 * Configurazioni di branding per la tua applicazione
 */
return [
    'settings' => [
        'redirect_after_auth' => 'Dove dovrebbe essere reindirizzato l\'utente dopo essere stato autenticato?',
        'registration_show_password_same_screen' => 'Durante la registrazione, mostrare la password nella stessa schermata o in una schermata separata.',
        'registration_include_name_field' => 'Durante la registrazione, includere il campo Nome.',
        'registration_require_email_verification' => 'Durante la registrazione, richiedere agli utenti di verificare la loro email.',
        'enable_branding' => 'Questo attiverà/disattiverà il branding Auth in fondo ad ogni schermata di autenticazione. Considera di lasciarlo attivo per supportare e aiutare la crescita di questo progetto.',
        'dev_mode' => 'Questo è per la modalità di sviluppo, quando è impostato su Modalità Dev, le risorse verranno caricate da Vite',
        'enable_2fa' => 'Abilitare la possibilità per gli utenti di attivare l\'Autenticazione a Due Fattori',
        'login_show_social_providers' => 'Mostrare i pulsanti di accesso dei provider social sul modulo di login',
        'social_providers_location' => 'La posizione dei pulsanti dei provider social (alto o basso)',
    ],
];
