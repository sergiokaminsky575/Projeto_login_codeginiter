# Projeto de Login com CodeIgniter 4

![GitHub repo size](https://img.shields.io/github/repo-size/sergiokaminsky575/Projeto_login_codeginiter)
![GitHub last commit](https://img.shields.io/github/last-commit/sergiokaminsky575/Projeto_login_codeginiter)
![PHP version](https://img.shields.io/badge/PHP-%3E=8.1-blue)
![License](https://img.shields.io/github/license/sergiokaminsky575/Projeto_login_codeginiter)

Este é um projeto simples de sistema de login desenvolvido com o framework **CodeIgniter 4**.  
O objetivo é fornecer uma base segura para autenticação de usuários em aplicações PHP modernas.

---

## 🚀 Funcionalidades

- Tela de login com verificação de credenciais
- Sistema de autenticação com sessões
- Redirecionamento após login
- Logout
- Validações básicas de formulário

---

## 🖼️ Prints de Tela

### Página de Login

![Tela de login](prints/login.png)

![alt text](image.png)

![image](https://github.com/user-attachments/assets/11250c84-6b57-4ebf-aaad-852884d94efa)


### Tela pós-login (dashboard ou página protegida)

![Página protegida](prints/dashboard.png)

*As imagens acima devem estar na pasta `prints/` dentro do projeto.*

---

## 🧱 Tecnologias Utilizadas

- **PHP 8.1+**
- **CodeIgniter 4**
- **MySQL**
- HTML, CSS (Bootstrap opcional)

---

## 📁 Estrutura do Projeto

```
projeto_login_codeigniter/
├── app/
├── public/
├── writable/
├── .env
├── composer.json
└── README.md
```

---

## ⚙️ Como Rodar Localmente

1. **Clone o repositório:**

```bash
git clone https://github.com/seuusuario/projeto_login_codeigniter.git
cd projeto_login_codeigniter
```

2. **Instale as dependências (se estiver usando Composer):**

```bash
composer install
```

3. **Configure o `.env`:**

```
database.default.hostname = localhost
database.default.database = nome_do_banco
database.default.username = root
database.default.password = sua_senha
database.default.DBDriver = MySQLi
```

4. **Crie o banco de dados e execute as migrations** (se houver).

5. **Inicie o servidor local:**

```bash
php spark serve
```

Acesse: `http://localhost:8080`

---

## ☁️ Deploy em Hospedagem Compartilhada

1. Faça upload dos arquivos **fora da pasta `public/`** para o diretório raiz do seu plano (ex: `meusite.com/`).
2. Aponte o conteúdo da pasta `public/` para o diretório **público da hospedagem** (como `public_html/`).
3. Edite o caminho do autoload no `index.php` dentro de `public/`, por exemplo:

```php
require __DIR__ . '/../vendor/autoload.php';
$pathsPath = __DIR__ . '/../app/Config/Paths.php';
```

4. Ajuste as permissões da pasta `writable/` (normalmente 755 ou 775).
5. Certifique-se de configurar corretamente o `.env` com o banco de dados da hospedagem.

---

## ✅ Requisitos

- PHP 8.1 ou superior
- Extensões:
  - `intl`
  - `mbstring`
  - `json`
  - `mysqlnd`

---

## 🤝 Contribuições

Contribuições são bem-vindas!  
Abra issues ou envie pull requests.

---

## 📄 Licença

MIT - veja o arquivo [LICENSE](LICENSE).
