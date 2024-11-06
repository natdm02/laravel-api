# laravel-one-to-many

Ciao ragazze e ciao ragazzi,
continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità: Type.
Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
Nota bene:
Le tipologie non sono le tecnologie usate, ma il tipo di progetto, come ad esempio: full-stack, front-end, back-end, database, ecc..
I task da svolgere sono diversi, ma la maggior parte sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
creare la migration per la tabella types
creare il model Type
creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
aggiungere ai model Type e Project i metodi per definire la relazione one to many
visualizzare nella pagina di dettaglio di un progetto la tipologia associata
permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione
Bonus 1:
Creare il seeder per il model Type.
Bonus 2:
Aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.







