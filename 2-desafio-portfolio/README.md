# 🚀 Desafio Portfolio - Rocketseat PHP Course

Um portfólio moderno e responsivo desenvolvido em PHP como parte do curso de PHP da Rocketseat. Este projeto demonstra a criação de uma página de portfólio pessoal utilizando PHP com arquitetura baseada em componentes reutilizáveis.

## 📋 Sobre o Projeto

Este projeto é um desafio do curso de PHP da Rocketseat que consiste em criar um portfólio pessoal seguindo o design do Figma fornecido. O portfólio apresenta informações sobre o desenvolvedor, projetos em destaque e formas de contato através de redes sociais.

**Design Original:** [Figma - Portfolio Design](https://www.figma.com/community/file/1426251628808157943)

## ✨ Funcionalidades

- **Seção Hero**: Apresentação pessoal com foto, nome, título profissional e descrição, além de tags com as tecnologias utilizadas
- **Seção Projetos**: Grid responsivo exibindo projetos em destaque com informações sobre cada projeto e suas tecnologias
- **Seção Contato**: Links para redes sociais e formas de contato

## 🛠️ Tecnologias Utilizadas

- **PHP**: Linguagem de programação server-side
- **HTML5**: Estruturação do conteúdo
- **Tailwind CSS**: Framework CSS utilitário para estilização
- **Phosphor Icons**: Biblioteca de ícones
- **Google Fonts**: Fontes customizadas (Asap, Inconsolata, Maven Pro)

## 📁 Estrutura do Projeto

```
2-desafio-portfolio/
├── components/          # Componentes reutilizáveis
│   ├── project-card.php    # Card de projeto
│   ├── social-button.php   # Botão de rede social
│   └── tag.php             # Tag de tecnologia
├── sections/           # Seções da página
│   ├── hero.php            # Seção de apresentação
│   ├── projects.php        # Seção de projetos
│   └── contact.php         # Seção de contato
├── img/                # Imagens do projeto
│   ├── background_intro.png
│   ├── background_contacts.png
│   └── project-*.png
├── index.php           # Arquivo principal
├── server.php          # Configuração do servidor
└── README.md           # Documentação
```

## 🏗️ Arquitetura

O projeto utiliza uma arquitetura baseada em componentes, onde:

- **`index.php`**: Arquivo principal que inclui todas as seções
- **`sections/`**: Contém as seções principais da página (Hero, Projects, Contact)
- **`components/`**: Componentes reutilizáveis que podem ser incluídos em diferentes seções
- Cada componente recebe variáveis através do escopo PHP para personalização

## 🚀 Como Executar

### Pré-requisitos

- PHP 7.4 ou superior
- Servidor web (Apache/Nginx) ou PHP Built-in Server

### Instalação

1. Clone o repositório ou navegue até a pasta do projeto:
```bash
cd 2-desafio-portfolio
```

2. Inicie o servidor PHP:
```bash
php -S localhost:8888 -d auto_prepend_file=server.php
```

3. Acesse no navegador:
```
http://localhost:8888
```

## 🎨 Personalização

Para personalizar o portfólio com suas informações:

1. **Hero Section** (`sections/hero.php`):
   - Altere a URL da imagem do avatar
   - Modifique o nome, título e descrição
   - Ajuste as tags de tecnologias conforme necessário

2. **Projects Section** (`sections/projects.php`):
   - Edite o array `$projects` com seus projetos
   - Adicione ou remova projetos conforme necessário
   - Atualize as imagens dos projetos na pasta `img/`

3. **Contact Section** (`sections/contact.php`):
   - Modifique o array `$socialMedias` com suas redes sociais
   - Adicione ou remova links de contato

## 📝 Notas

- O projeto utiliza Tailwind CSS via CDN para facilitar o desenvolvimento
- As imagens de background e projetos devem estar na pasta `img/`
- Os componentes são incluídos usando `require` do PHP, permitindo compartilhamento de variáveis através do escopo

## 📚 Curso

Este projeto faz parte do **Curso de PHP da Rocketseat**, onde são abordados conceitos fundamentais de PHP, incluindo:
- Estrutura de arquivos e organização de código
- Inclusão de arquivos PHP (`require`, `include`)
- Manipulação de arrays e estruturas de dados
- Componentização e reutilização de código

---

Desenvolvido com ❤️ para o curso de PHP da Rocketseat

