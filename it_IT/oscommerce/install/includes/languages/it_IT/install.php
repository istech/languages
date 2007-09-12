# $Id: install.php 466 2006-03-05 16:34:20Z hpdl $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2006 osCommerce
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License v2 (1991)
# as published by the Free Software Foundation.

page_title_installation = Nuova Installazione

page_heading_step_1 = Server di Database
page_heading_step_2 = Server Web
page_heading_step_3 = Impostazioni del Negozio Online
page_heading_step_4 = Finito!

text_installation = <p>La routine d'installazione web configurerà osCommerce affinché possa funzionare correttamente su questo server.</p><p>Segui le istruzioni a schermo che ti guideranno durante la configurazione delle opzioni del server database, del server web e del negozio. Se hai bisogno di aiuto consulta la documentazione o chiedi aiuto nel forum di sopporto.</p>
text_successful_installation = L'installazione e la configurazione sono state completate con successo!

param_database_server = Server Database
param_database_server_description = L'indirizzo del server database nella forma di mome host o indirizzo IP.
param_database_username = Nome Utente
param_database_username_description = Il Nome Utente utilizzato per la connessione al server database.
param_database_password = Password
param_database_password_description = La password utilizzata in combinazione al Nome Utente per connettersi al server database.
param_database_name = Nome del Database
param_database_name_description = Il nome del database che conterrà i dati.
param_database_type = Tipo di Database
param_database_type_description = Il tipo di software utilizzato dal database.
param_database_prefix = Prefisso per le tabelle
param_database_prefix_description = Il prefisso utilizzato per le tabelle del database.

param_database_import_sample_data = Importa i dati di esempio
param_database_import_sample_data_description = E' consigliabile importare i dati di esempio in caso di prima installazione.

param_web_address = Indirizzo WWW
param_web_address_description = L'indirizzo web del negozio online.
param_web_root_directory = Directory radice del Webserver
param_web_root_directory_description = la directory dove è installato il negozio online sul server.
param_web_work_directory = Directory di lavoro
param_web_work_directory_description = Directory di lavoro per i file temporanei. Per motivi di sicurezza questa directory deve trovarsi all'esterno della directori radice del server web. (Shared hosting servers should not use /tmp/)

param_store_name = Nome del negozio
param_store_name_description = Nome del negozio online.
param_store_owner_name = Nome del titolare del negozio
param_store_owner_name_description = Il nome del titolare del negozio online.
param_store_owner_email_address = Indirizzo e-mail del titolare del negozio
param_store_owner_email_address_description = L'indirizzo e-mail del titolare del negozio online.
param_administrator_username = Nome Utente Amministratore
param_administrator_username_description = Il Nome Utente dell'Amministratore verrà usato per l'amministrazione.
param_administrator_password = Password Administratore
param_administrator_password_description = La password usata dall'Amministratore.

box_steps_step_1 = Server Database
box_steps_step_2 = Server web
box_steps_step_3 = Impostazione del Negozio Online
box_steps_step_4 = Finito!

box_info_step_1_title = Passo 1: Server Database
box_info_step_1_text = <p>Il database contiene le informazioni del negozio online come le informazioni sui prodotti, sui clienti e sugli ordini effettuati.</p><p>Contatta il gestore del server se non conosci i parametri di configurazione.</p>

box_info_step_2_title = Passo 2: Server web
box_info_step_2_text = <p>Il server web si occupa di elaborare le pagine web del negozio online che saranno visualizzate ai visitatori ed ai clienti. I parametri di configurazione sel server web fanno si che i collegamenti puntino alla posizione corretta.</p><p>I file temporanei come per es. i dati delle sessioni ed i file della cache sono memorizzati nella directory work. E' importante che questa directory sia posizionata al di fuori della directory radice del server web e che sia protetta da accessi non consentiti.</p>

box_info_step_3_title = Passo 3: Impostazioni del Negozio Online
box_info_step_3_text = <p>In quest'area puoi impostare il nome del negozio online e le informazioni di contatto per il titolare del negozio.</p><p>Il nome utente e la password dell'amministratore sono utilizzate per accedere agli strumenti di amministrazione.</p>

box_info_step_4_title = Passo 4: Finito!
box_info_step_4_text = <p>Congratulazioni per aver usato osCommerce come tua soluzione ecommerce per il tuo negozio online!</p><p>Ti auguriamo buona fortuna con il tuo nuovo negozio online e ti inviatiamo ad unirti e partecipare alla nostra community.</p><p align="right">- Il team di osCommerce</p>

error_configuration_file_not_writeable = <p>Il server web non ha potuto scrivere i parametri di configurazione del negozio online nel file di configurazione a causa di problemi con i permessi di accesso al file.</p><p>Per favore verifica i permessi del file di configurazione affinché il server web possa modificarlo, e riprova un'altra volta cliccando sul sottostante pulsante Riprova.</p><p>Il file di configurazione si trova in:</p><p>%s</p>
error_configuration_file_alternate_method = <p>In alternativa puoi copiare manualmente ed in seguito salvare il contenuto della casella di testo sottostante nel file di configurazione.</p>

rpc_database_connection_test = Sto testando la connessione con il database..
rpc_database_connection_error = Si è verificato un problema nel tentativo di connessione al server database. L'errore che si è verificato è:</p><p><b>%s</b></p><p>Verifica i parametri di connessione e riprova.
rpc_database_connected = Sei connesso al database.
rpc_database_importing = Ora sarà importata la struttura del database. Abbi pazienza durante questa fase.
rpc_database_imported = Il database è stato importato con successo.
rpc_database_import_error = Si è verificato un problema nel tentativo di importare il database. L'errore che si è verificato è:</p><p><b>%s</b></p><p>Verifica i parametri di connessione e riprova.

rpc_work_directory_test = Sto testando la directory di lavoro..
rpc_work_directory_error_non_existent = Si è verificato un problema nel tentativo di accedere la directory di lavoro. L'errore che si è verificato è:<br /><br /><b>La directory non esiste:<br /><br />%s</b><br /><br />Verifica i parametri di connessione e riprova.
rpc_work_directory_error_not_writeable = Si è verificato un problema nel tentativo di accedere la directory di lavoro. L'errore che si è verificato è:<br /><br /><b>Il server web non ha i permessi per scrivere la directory:<br /><br />%s</b><br /><br />Verifica i permessi per scrivere la directory e riprova.
rpc_work_directory_configured = La directory di lavoro è stata configurata con successo.

rpc_database_sample_data_importing = Ora saranno importati i dati di esempio. Abbi pazienza durante questa fase.
rpc_database_sample_data_imported = Il database di esempio è stato importato con successo.
rpc_database_sample_data_import_error = Si è verificato un problema nel tentativo di importare il database di esempio. L'errore che si è verificato è:</p><p><b>%s</b></p><p>Verifica il server database e riprova.
