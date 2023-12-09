# Setup del progetto - SyncHub

## Download

- `git clone https://github.com/alessiocsassu/SyncHub.git`
- `git checkout develop`
- `git pull`

## Setup

### Download

- Installare Docker Desktop --> [https://www.docker.com/products/docker-desktop/](https://www.docker.com/products/docker-desktop/)

### File .env

- Verificare il file .env.example nella directory principale del progetto
- Verificare i seguenti parametri `WWWUSER=1000 WWWGROUP=1000`
- Se il progetto gira su MacOS aggiorna i valori in `WWWUSER=501 WWWGROUP=20`
- Effettuare una copia del file .env.example e rinominare in .env
- Generare la APP_KEY lanciando il comando `php artisan key:generate`

### Docker Compose

- All'interno della cartella del progetto `docker compose build`
- `docker compose up -d`
- Verificare che tutti i container siano collegati

### File hosts

- Aggiornare il file hosts di sistema aggiungendo la url `synchub.local` all'indirizzo `127.0.0.1`
- Verificare testando la connessione a [http://synchub.local](http://synchub.local), apparirà la pagina del progetto


### Database

- Effettuare e verificare la connessione al DB MySQL con i dati inseriti nel file .env
- Generare lo schema lanciando il comando `php artisan migrate`



