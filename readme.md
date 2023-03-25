
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
- Acessar a pasta `docker/html`
- Execute o comando no workdir `sudo chmod -R 777 html`
- Alterar a url da aplicação em `docker\html\config.php`
- acesse a pagina `url_aplicacao:8000`

## AWS

- Provisione uma instancia EC2.
- Add ao user data

```shell
#!/bin/bash
yum update
yum -y install docker
yum -y install git
service docker start
usermod -a -G docker ec2-user
chkconfig docker on
pip3 install docker-compose
reboot
```

- Caso não instale o docker compose use:

```shell
sudo curl -L https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m) -o /usr/bin/docker-compose && sudo chmod +x /usr/bin/docker-compose && docker-compose --version
```

- Faça clone da aplicação

```shell
git clone https://github.com/Uniliva/uni-agenda.git
```


- Acessar a pasta `uni-agenda/docker/html`
- Execute o comando no workdir `sudo chmod -R 777 html`
- Alterar a url da aplicação em `docker\html\config.php`
- Use os comandos abaixo pra instalar

```shell
cd uni-agenda/docker/server/
docker-compose up -d
```


- acesse a pagina `url_aplicacao:8000`