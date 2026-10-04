# Constru Ideias

Site desenvolvido como TCC que conecta clientes a profissionais da construção civil. O usuário pode se cadastrar, fazer login, navegar pelos setores de atuação e ver o perfil dos profissionais.

Feito com **PHP** (sem framework), **MySQL/MariaDB** e **Bootstrap 5**.

🏆 **Premiado como o melhor TCC da turma.**

## Páginas

| Arquivo | Descrição |
| --- | --- |
| `index.php` | Página inicial |
| `whoareus.php` | Quem somos |
| `sector.php` | Setores de atuação: filtra profissionais por função |
| `userspage.php` | Perfil de um profissional |
| `contact.php` | Contato |
| `register.php` | Cadastro de usuário |
| `login.php` / `logout.php` | Entrar e sair |
| `account.php` | Conta do usuário logado |
| `terms.php` | Termos de uso |
| `functions.php` | Conexão com o banco e funções auxiliares |
| `sql/TCCdatabase.sql` | Script que cria o banco `tccdatabase` com usuários de exemplo |

## Como rodar

### Opção 1: Docker (recomendado)

Pré-requisito: [Docker](https://docs.docker.com/get-docker/) com o Docker Compose.

```bash
docker compose up -d --build
```

Acesse **http://localhost:8080**. O banco é criado automaticamente a partir de `sql/TCCdatabase.sql` na primeira execução.

Para parar:

```bash
docker compose down
```

Para apagar o banco e recriá-lo do zero, use `docker compose down -v`.

### Opção 2: XAMPP

1. Copie a pasta do projeto para `htdocs` do XAMPP (ex.: `C:\xampp\htdocs\siteTCC`).
2. Inicie o **Apache** e o **MySQL** no painel do XAMPP.
3. Abra o phpMyAdmin (http://localhost/phpmyadmin) e importe `sql/TCCdatabase.sql`.
4. Acesse http://localhost/siteTCC.

A conexão usa usuário `root` sem senha, o padrão do XAMPP. O host do banco é `localhost`, a não ser que a variável de ambiente `DB_HOST` esteja definida (o Docker usa isso).

## Usuários de teste

O script SQL já cadastra alguns usuários, por exemplo:

| E-mail | Senha |
| --- | --- |
| joao@gmail.com | 12345 |
| maria@hotmail.com | 54321 |

## Observações

Este é um projeto acadêmico e não deve ser usado em produção como está: as senhas são salvas em texto puro e as consultas SQL concatenam a entrada do usuário (vulnerável a SQL injection).
