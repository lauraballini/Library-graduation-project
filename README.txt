ELENCO PAGINE DEL SITO.

SE UTENTE NON REGISTRATO O SENZA ACCESSO : 
- biblioteca.php (home page - TUTTI)
- catalogo_biblio.php (elenco libri senza disponibilità)
- contatti_biblio.php (contatti e orari - TUTTI)
- volontari_biblio.php (consigli di lettura - TUTTI)
- servizi_biblio.php (servizi - TUTTI)
- accedi_biblio.php (login)
- registrati_biblio.php (registrazione) 

SE UTENTE REGISTRATO - USER: 
- index.php (Benvenuto)
- catalogo_biblio.php (elenco libri + disponibilità + tasto prenotazione)
- personal.php (pagina user)
- USER_PRESTITI.php (riepilogo prestiti aperti e chiusi)
- USER_PRENOTAZIONI.php (riepilogo prenotazioni aperte e chiuse)

SE UTENTE REGISTRATO - ADMIN:
- index.php (benvenuto)
- catalogo_biblio.php (elenco libri + disponibilità + tasto prenotazione)
- admin.php (pagina admin)

- admin_user.php (gestione utenti):
        - update_user.php + UP_USER.php (modifica tipo utente)
        - delete_user.php + DEL_USER.php (elimina utente)
        - insert_user.php + IN_USER.php (nuovo utente)

- admin_book.php (gestione catalogo libri):
        - insert_book.php + IN_BOOK.php (inserisci libro) 
        - delete_book.php + DEL_BOOK.php (elimina libro)

- admin_prestiti.php (gestione prestiti):
        - insert_prestito.php + IN_PRESTITO.php (nuovo prestito -> disponibilità = no)
        - delete_prestito.php + DEL_PRESTITO.php (chiudi prestito -> disponibilità = si) 

- admin_prenotazioni.php (gestione prenotazioni):
        - insert_prenotazioni.php + IN_PRENOTAZIONE.php (nuova prenotazione -> disponibilità = no)
        - delete_prenotazioni.php + DEL_PRENOTAZIONI.php (chiudi prenotazione -> diventa prestito)
