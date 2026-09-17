<a href="https://github.com/Azzi-Vitor">
  <img width="100%" src="https://capsule-render.vercel.app/api?type=waving&color=00FF00&height=130&section=header"/>
</a>

<!-- TÍTULO -->

<p align="center">
  <a href="https://github.com/Azzi-Vitor">
    <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=27&duration=2000&pause=800&color=089A00&center=true&vCenter=true&multiline=true&repeat=false&width=650&lines=Cadastro+de+Alunos" alt="Typing SVG" />
  </a>
</p>

<!-- SUBTÍTULO -->

<p align="center">
  <a href="https://github.com/Azzi-Vitor">
    <img 
      src="https://readme-typing-svg.demolab.com?font=Fira+Code&weight=900&pause=1200&color=25F700&center=true&vCenter=true&width=700&lines=PHP+%7C+JavaScript+%7C+JSON+%7C+HTML+%7C+CSS" 
      alt="Typing SVG"
    />
  </a>
</p>

<p align="center">
  Sistema web desenvolvido para cadastro, consulta e gerenciamento de alunos,
  utilizando PHP como backend e JSON para armazenamento dos dados.
</p>

---

## 📚 Sobre o Projeto

O **Cadastro de Alunos** é uma aplicação web desenvolvida para praticar conceitos fundamentais de desenvolvimento web, comunicação entre frontend e backend e manipulação de dados.

O sistema permite cadastrar alunos informando:

* 👤 Nome
* 📝 Nota
* 📚 Disciplina

Os dados são enviados ao backend através de requisições HTTP e armazenados em um arquivo **JSON**, sem a necessidade de um banco de dados.

O projeto também possui uma tabela dinâmica que apresenta os alunos cadastrados e destaca automaticamente aqueles que possuem **nota abaixo de 6**.

---

## ⚙️ Funcionalidades

### 📝 Cadastro de alunos

O usuário pode cadastrar um aluno através do formulário da aplicação.

Os dados são enviados para o backend utilizando uma requisição:

```text
POST /index.php
```

O backend valida as informações antes de armazená-las.

---

### 🔍 Consulta de alunos

Os alunos cadastrados podem ser recuperados através de:

```text
GET /index.php
```

Os dados armazenados no arquivo `alunos.json` são retornados em formato JSON e utilizados pelo JavaScript para preencher a tabela.

---

### ✅ Validação de dados

O sistema realiza validações no backend, incluindo:

* Nome obrigatório
* Nota obrigatória
* Nota entre **0 e 10**
* Disciplina obrigatória

Caso algum dado seja inválido, a API retorna uma resposta HTTP apropriada.

Exemplo:

```json
{
  "erro": "A nota deve ser entre 0 e 10"
}
```

---

### 🗑️ Limpeza dos cadastros

A aplicação possui um botão **"Limpar cadastros"**.

Após a confirmação do usuário, uma requisição `POST` é enviada ao backend solicitando a remoção dos registros.

O arquivo `alunos.json` é então sobrescrito com:

```json
[]
```

---

### 📊 Tabela dinâmica

Os alunos cadastrados são exibidos dinamicamente através de JavaScript.

Além disso, alunos com nota inferior a 6 recebem uma classe específica:

```javascript
if (Number(aluno.nota) < 6) {
    linha.classList.add('nota-baixa');
}
```

Isso permite aplicar uma estilização diferenciada para notas abaixo da média.

---

## 🧠 Conceitos Praticados

Este projeto foi desenvolvido com foco no aprendizado de:

* HTTP
* GET e POST
* APIs
* JSON
* PHP
* JavaScript
* Fetch API
* Manipulação do DOM
* Validação de dados
* Persistência em arquivos
* Estruturas condicionais
* `switch/case`
* Tratamento de requisições
* HTML semântico
* CSS
* Comunicação entre frontend e backend

---

## 🛠️ Tecnologias

<p align="center">
  <img width="50" title="HTML5" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg"/>
  <img width="50" title="CSS3" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg"/>
  <img width="50" title="JavaScript" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg"/>
  <img width="50" title="PHP" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg"/>
  <img width="50" title="JSON" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/json/json-original.svg"/>
</p>

<p align="center">
  <em>PHP • JavaScript • HTML5 • CSS3 • JSON • Fetch API • REST Concepts</em>
</p>

---

## 📁 Estrutura do Projeto

```text
cadastro-alunos/
│
├── index.html
│
├── index.php
│
├── alunos.json
│
└── style/
    └── style.css
```

### `index.html`

Responsável pela interface da aplicação, formulário de cadastro e tabela de alunos.

Também utiliza JavaScript para realizar as requisições ao backend através da **Fetch API**.

### `index.php`

Funciona como o backend da aplicação.

O arquivo identifica o método HTTP utilizado e processa as requisições através de:

```php
switch ($method)
```

Atualmente são tratados:

```text
GET
POST
```

### `alunos.json`

Arquivo utilizado para armazenar os alunos cadastrados.

Exemplo:

```json
[
    {
        "nome": "João",
        "nota": "8.5",
        "disciplina": "Matemática"
    }
]
```

### `style/style.css`

Responsável pela interface visual da aplicação, utilizando uma estética inspirada em **quadro escolar, papel e boletim**.

---

## 🔄 Fluxo da Aplicação

```text
             ┌─────────────────┐
             │     Usuário     │
             └────────┬────────┘
                      │
                      ▼
             ┌─────────────────┐
             │   index.html    │
             │ HTML + CSS + JS │
             └────────┬────────┘
                      │
                Fetch API
                      │
                      ▼
             ┌─────────────────┐
             │    index.php    │
             │     Backend     │
             └────────┬────────┘
                      │
             ┌────────┴────────┐
             │                 │
            GET               POST
             │                 │
             ▼                 ▼
        Ler alunos       Validar dados
             │                 │
             │                 ▼
             │          alunos.json
             │                 │
             └────────┬────────┘
                      │
                      ▼
             ┌─────────────────┐
             │   JSON Response │
             └────────┬────────┘
                      │
                      ▼
             ┌─────────────────┐
             │ Tabela dinâmica │
             └─────────────────┘
```

---

## 🚀 Como Executar

### 1. Instale um servidor local

Você pode utilizar ferramentas como:

* WAMP
* XAMPP
* Laragon

### 2. Coloque o projeto no diretório do servidor

No WAMP, por exemplo:

```text
C:\wamp64\www\cadastro-alunos
```

### 3. Inicie o Apache

Certifique-se de que o servidor Apache esteja funcionando.

### 4. Acesse no navegador

```text
http://localhost/cadastro-alunos/index.html
```

---

## 🎯 Objetivo do Projeto

Este projeto foi desenvolvido como prática acadêmica para compreender como **frontend e backend podem se comunicar através de requisições HTTP**, utilizando PHP para processamento dos dados e JavaScript para atualizar a interface de forma dinâmica.

O projeto também serviu para colocar em prática conceitos de **APIs, métodos HTTP, JSON, validação de dados e manipulação do DOM**.

---

## 👨‍💻 Desenvolvedor

<p align="center">
  <strong>Vítor Nunes Azzi</strong>
</p>

<p align="center">
  Graduando em Tecnologia em Sistemas para Internet — IFSul
</p>

<p align="center">
  <a href="https://github.com/Azzi-Vitor">
    <img src="https://img.shields.io/badge/GitHub-Azzi--Vitor-00FF00?style=for-the-badge&logo=github&logoColor=white&labelColor=0d1117" />
  </a>
  <a href="https://www.linkedin.com/in/v%C3%ADtor-azzi-597961399/">
    <img src="https://img.shields.io/badge/LinkedIn-Vítor%20Azzi-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" />
  </a>
</p>

---

<a href="https://github.com/Azzi-Vitor">
  <img width="100%" src="https://capsule-render.vercel.app/api?type=waving&color=00FF00&height=120&section=footer"/>
</a>
