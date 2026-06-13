# Site da Paróquia Santa Clara de Assis - Birigui/SP

Este é o tema personalizado do WordPress desenvolvido sob medida para o portal da Paróquia Santa Clara de Assis (Birigui/SP). O projeto utiliza uma estrutura híbrida focada em performance, estilizada com **Sass (SCSS)** e otimizada via **Gulp**, rodando sobre o **Classic Editor (TinyMCE)** para facilitar o gerenciamento de conteúdo interno.

## 🌐 Link de Produção & Propósito do Repositório

* **Website Oficial:** [https://santaclarabirigui.com](https://santaclarabirigui.com)
* **Propósito:** Este repositório está hospedado no GitHub **exclusivamente para fins de portfólio e divulgação de desenvolvimento**. 

💡 Nota de Uso: > Este repositório está público para fins de portfólio e demonstração técnica. Sinta-se à vontade para utilizar a estrutura do Gulp, a organização do Sass ou os blocos de código como referência de estudo e inspiração para os seus próprios projetos. Apenas solicita-se que não seja feita a replicação integral e idêntica deste tema para uso comercial.

## 🛠️ Tecnologias e Dependências

### Front-end & Ferramentas
* **WordPress Core** (Configurado com Classic Editor ativo)
* **Sass (SCSS)** - Organização modular de estilos
* **Gulp** - Automação de tarefas (Compilação Sass, Minificação de JS e BrowserSync)
* **Bootstrap** (Reboot & Grid Utilities)
* **SwiperJS** - Carrosséis e sliders de banners/posts
* **Lightbox** - Visualização de galerias de fotos

## 📂 Estrutura do Projeto

Abaixo está o mapeamento real dos arquivos e pastas do tema baseado no ambiente de desenvolvimento:

```text
SANTA_CLARA/ (Raiz do Tema)
├── acf-json/               # Sincronização automática dos grupos de campos do ACF
├── images/                 # Assets de imagem e mídia estática do tema
├── includes/               # Componentes PHP reutilizáveis (Banners, Cards, etc.)
├── scripts/                # Arquivos JavaScript
├── styles/                 # CSS Compilado, Bibliotecas e Produção (Gulp Output)
├── 404.php                 # Template para páginas de erro não encontradas
├── footer.php              # Rodapé global do site
├── functions.php           # Configurações do tema, Hooks, PWA e Helpers
├── gulpfile.js             # Automação de tarefas do Gulp (Build de CSS/JS)
├── header.php              # Cabeçalho global do site
├── index.php               # Template padrão do ecossistema
├── page-contato.php        # Template customizado para a página de Contato
├── page-galeria.php        # Template customizado para a página de Galeria
├── page-home.php           # Template customizado para a Página Inicial 
├── page-noticias.php       # Template customizado para a listagem de Notícias
├── page-sobre-nos.php      # Template customizado para a página Quem Somos
├── readme.md               # Documentação do projeto
├── single-comunidade.php   # Template para o Custom Post Type de Comunidades
├── single-galeria-de-foto.php # Template para o Custom Post Type de Galerias de Fotos
├── single.php              # Template para posts individuais (Artigos/Notícias)
└── style.css               # Folha de estilo principal obrigatória do WordPress