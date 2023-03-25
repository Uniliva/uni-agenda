
# Uni agenda

Instalador da aplicação [easyappointments](https://easyappointments.org)..

# Pré requisitos

- Linux
- Docker
- Docker compose

# Instalação

- Faça o clone da desse repositorio.
- Acesse a pasta `docker/server`
- Execute o comando `docker-compose up -d`
- Acesse o container com `docker exec -it container_name /bin/bash `
- Execute o comando no workdir `chmod -R 777 storage`
- acesse a pagina `localhost:8080`