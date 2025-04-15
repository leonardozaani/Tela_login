# Projeto A1 – Programação III
## Sistema de Registro e Autenticação de Usuários com PHP Orientado a Objetos

**Aluno:** Leonardo Felipe Zani  
**Professor:** Leandro Otavio Cordova Vieira  
**Entrega:** 15/04/2025

---

## 📌 Descrição

Sistema simples de autenticação de usuários desenvolvido em **PHP Puro com Orientação a Objetos (POO)**, utilizando sessões e cookies.

Funcionalidades:
- Cadastro de usuários (nome, e-mail e senha)
- Login com validação
- Área restrita com saudação personalizada
- Armazenamento opcional do e-mail em cookie
- Logout com destruição da sessão

---

## ⚙️ Como Executar Localmente

### ✔️ Usando XAMPP

1. Baixe o [XAMPP](https://www.apachefriends.org/pt_br/index.html) e instale.
2. Copie a pasta `proj-a1/` para:
   - `C:\xampp\htdocs\` (Windows)
   - `/opt/lampp/htdocs/` (Linux/macOS)
3. Abra o **XAMPP Control Panel** e inicie o módulo **Apache**.
4. No navegador, acesse:
http://localhost/proj-a1/


---

## 🔐 Funcionalidades

### Cadastro
- Formulário com nome, e-mail e senha
- Criação do objeto `Usuario`
- Senha armazenada com `password_hash()`

### Login
- Verificação com `password_verify()`
- Início de sessão
- Armazenamento de e-mail em cookie se marcado “Lembrar e-mail”

### Dashboard
- Protegido por sessão
- Exibe nome do usuário autenticado
- Mostra e-mail salvo em cookie (se houver)

### Logout
- Destroi sessão e cookie
- Redireciona para o login

---

Feito com 💻 por Leonardo F. Zani – Sistemas da informação – UNOESC
