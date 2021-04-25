<img src="https://raw.githubusercontent.com/diogenesc/FacilitAluno/master/public/assets/img/logo.svg" alt="drawing" width="100"/>

# FacilitAluno

Software de Gestão Estudantil

FacilitAluno é uma aplicação web com o objetivo de reunir ferramentas essenciais para o gerenciamento dos seus estudos na Universidade Federal do Espírito Santo, tais como:


- Fluxograma de disciplinas do curso
- Organizador de tarefas
- Bloco de anotações
- Armazenamento em cloud
- Metas do usuário
## Authors

- [@diogenesc](https://www.github.com/diogenesc)
- [@GabrielMotaBLima](https://www.github.com/GabrielMotaBLima)
- [@spectrewall](https://www.github.com/spectrewall)
- [@thainagx](https://www.github.com/thainagx)

  
## Rode localmente 
Requisitos:
- PHP 8
- MySQL 8
- Docker (se for utilizar o Laravel Sail)

Clone este repositório e acesse a pasta do projeto

```bash 
  git clone https://github.com/diogenesc/FacilitAluno.git
  cd FacilitAluno
```
Faça uma cópia do arquivo de variáveis de ambiente e preencha como necessário
```bash 
  cp .env.example .env
```
Instale as dependências
```bash 
  composer install
```
Execute as migrations e inicialize o usuário admin
```bash 
  php artisan migrate --seed
```
Rode o servidor
```bash 
  php artisan serve
```
O sistema pode ser acessado em http://localhost:8000