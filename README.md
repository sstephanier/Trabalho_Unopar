# Trabalho Unopar

Este projeto foi desenvolvido para o Relatório de Aula Prática - Programação Web. Ele tem como objetivo criar uma aplicação web que permite ao usuário descobrir seu signo do zodíaco com base em sua data de nascimento, apresentando descrições específicas de cada signo.

#### Desenvolvido por Maria Stephanie

## Funcionalidades

- **Entrada de Data de Nascimento**: O usuário insere sua data de nascimento para que o sistema determine e exiba o signo correspondente.
 
  ![img1](https://github.com/user-attachments/assets/2e0da298-28c5-4ba7-85c2-af1b346b34f9)
  
- **Visualização de Signo**: O sistema exibe o nome do signo e uma descrição personalizada para cada um, caso não encontre informa ao usuário.
  
  ![img2](https://github.com/user-attachments/assets/e31a7d2e-5dab-4755-a9eb-5ceab743d6b7)
  ![img3](https://github.com/user-attachments/assets/19d71dc5-eb3e-4480-b05f-19d08e585e71)
  
- **Estilo Personalizado por Signo**: Cada signo possui uma cor e um estilo visual específico para enriquecer a experiência do usuário.

## Tecnologias Utilizadas

- HTML
- CSS
- PHP
- XML (para armazenamento dos signos e datas de início e fim de cada signo)
- JavaScript (para funcionalidades adicionais, se necessário)

## Estrutura do Projeto

```plaintext
├── assets
│   ├── css
│   │   └── style.css         # Arquivo de estilos principal
│   ├── imgs
│   │   └── [imagens]         # Pasta para imagens do projeto, se necessário 
│   └── js
│       └── script.js         # Arquivo de scripts, se necessário
├── layouts
│   └── header.php            # Cabeçalho com links e meta informações
├── index.php                 # Página inicial para entrada da data de nascimento
├── show_zodiac_sign.php      # Página que exibe o signo e sua descrição
├── signos.xml                # Arquivo XML com as informações de cada signo
└── README.md                 # Este arquivo de documentação
