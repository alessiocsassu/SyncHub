# Schema del Database - SyncHub

## Tabelle

### Users
- `id` (PK, int, auto_increment): Identificatore univoco degli utenti.
- `username` (varchar): Nome utente.
- `email` (varchar): Indirizzo email dell'utente.
- `token` (varchar): Token per l'unione ad hub tramite invito.
- Altri campi relativi all'autenticazione dell'utente (password hash, token, etc.).

### Hubs
- `id` (PK, int, auto_increment): Identificatore univoco degli Hub.
- `name` (varchar): Nome dell'Hub.
- `description` (text): Descrizione dell'Hub.
- `created_by` (FK verso Users - id): Chiave esterna per identificare l'utente creatore dell'Hub.

### Hub_Members
- `id` (PK, int, auto_increment): Identificatore univoco dell'associazione utente-hub.
- `hub_id` (FK verso Hubs - id): Chiave esterna per identificare l'Hub.
- `user_id` (FK verso Users - id): Chiave esterna per identificare l'utente associato all'Hub.
- `role` (varchar): Ruolo dell'utente all'interno dell'Hub (es. 'owner', 'member').

### Token_Requests
- `id` (PK, int, auto_increment): Identificatore univoco della richiesta di token.
- `hub_id` (FK verso Hubs - id): Chiave esterna per identificare l'Hub associato alla richiesta.
- `token` (varchar): Token per unirsi all'Hub.
- `created_by` (FK verso Users - id): Chiave esterna per identificare l'utente creatore della richiesta di token.

### Accepted_Tokens
- `id` (PK, int, auto_increment): Identificatore univoco del token accettato.
- `token_request_id` (FK verso Token_Requests - id): Chiave esterna per identificare la richiesta di token accettata.
- `user_id` (FK verso Users - id): Chiave esterna per identificare l'utente accettato nel token.

### Assignments
- `id` (PK, int, auto_increment): Identificatore univoco dell'assegnazione di una task.
- `task_id` (FK verso Tasks - id): Chiave esterna per identificare la task assegnata.
- `assigned_to` (FK verso Users - id): Chiave esterna per identificare l'utente a cui è stata assegnata la task.
- Altri campi pertinenti alle assegnazioni o agli stati delle task assegnate.

### Comments
- `id` (PK, int, auto_increment): Identificatore univoco del commento.
- `task_id` (FK verso Tasks - id): Chiave esterna per identificare la task a cui si riferisce il commento.
- `user_id` (FK verso Users - id): Chiave esterna per identificare l'utente che ha scritto il commento.
- `comment_text` (text): Testo del commento.
- Altri campi relativi ai commenti.

### Labels
- `id` (PK, int, auto_increment): Identificatore univoco dell'etichetta.
- `label_name` (varchar): Nome dell'etichetta.
- `task_id` (FK verso Tasks - id): Chiave esterna per identificare la task associata all'etichetta.
- Altri campi relativi alle etichette.

### Attachments
- `id` (PK, int, auto_increment): Identificatore univoco dell'allegato.
- `task_id` (FK verso Tasks - id): Chiave esterna per identificare la task associata all'allegato.
- `file_path` (varchar): Percorso del file allegato.
- `description` (text): Descrizione dell'allegato.
- Altri campi relativi agli allegati.

### Notifications
- `id` (PK, int, auto_increment): Identificatore univoco della notifica.
- `user_id` (FK verso Users - id): Chiave esterna per identificare l'utente destinatario della notifica.
- `message` (text): Messaggio della notifica.
- `read_status` (boolean): Stato di lettura della notifica.
- Altri campi relativi alle notifiche.

## Relazioni

- Un utente può essere membro di più Hub.
- Ogni Task è associato a un singolo Hub e può essere assegnato a un utente specifico o rimanere non assegnato.
- Ogni Hub ha un creatore (un utente).
- Ogni Token Request è associata ad un unico utente e ad un unico Hub.
- Ogni Token accettato è associato ad un utente specifico.
- Ogni assegnazione di una task è associata ad un utente specifico per una task specifica all'interno di un hub.
- I commenti, le etichette, gli allegati e le notifiche sono associati a task specifiche o utenti specifici.
