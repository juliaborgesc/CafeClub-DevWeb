# Brasa Café Clube — Design System

## Overview

Brasa Café Clube é uma plataforma de assinatura de cafés especiais com curadoria personalizada por perfil sensorial.

A identidade visual deve transmitir:

* café especial;
* curadoria premium;
* acolhimento;
* descoberta;
* tecnologia simples e elegante;
* experiência de clube/assinatura.

O visual deve ser quente, sofisticado e acessível. A interface não deve parecer genérica, fria ou corporativa demais. Tudo deve lembrar o universo do café: tons terrosos, creme, madeira, torra, calor e detalhe artesanal.

---

## Colors

### Core Palette

* **Brasa Brown** `#4f3328`
  Cor principal da marca. Usar em textos fortes, fundos escuros, botões secundários, headers e áreas premium.

* **Ember Orange** `#e28413`
  Cor de destaque. Usar em CTAs, detalhes importantes, estados ativos, links em hover e elementos de energia.

* **Cream Background** `#faf5e9`
  Fundo principal do projeto. Usar no lugar de branco puro sempre que possível.

* **Soft Cream** `#f0e6d3`
  Superfícies secundárias, pills, backgrounds de cards internos e elementos suaves.

* **Deep Coffee** `#2a1a14`
  Texto muito forte, fundos intensos e contraste máximo dentro da paleta.

### Profile Colors

* **Iniciante** `#c8845a`
  Caramelo suave, acolhedor e acessível.

* **Frutado** `#59a96a`
  Verde fresco, leve e vibrante.

* **Intenso** `#e28413`
  Laranja forte, quente e marcante.

* **Equilibrado** `#788aa3`
  Azul acinzentado, elegante e estável.

* **Explorador** `#92614a`
  Marrom terroso, curioso e experimental.

### Semantic Colors

* **Success** `#2f7d3b`
* **Error** `#b0382e`
* **Warning** `#e28413`
* **Muted Text** `rgba(79, 51, 40, 0.62)`
* **Soft Border** `rgba(79, 51, 40, 0.10)`

---

## Typography

### Display Font

* **Anton**
* Usar em títulos grandes, nomes de perfis, chamadas fortes, preços e elementos de impacto.
* Sempre em caixa alta ou com sensação de headline.
* Evitar letter-spacing muito aberto.
* Preferir títulos blocados, pesados e compactos.

### Body Font

* **Inter**
* Usar em parágrafos, labels, botões, inputs, menus, tabelas e textos funcionais.
* Interface deve ser limpa, legível e moderna.

### Typographic Feel

* Headlines grandes e expressivas.
* Corpo com bastante respiro.
* Labels pequenos, uppercase, com letter-spacing moderado.
* Evitar fontes decorativas fora da identidade.
* Não usar emoji na interface.

---

## Layout

### Base

* Fundo principal em creme.
* Cards arredondados.
* Espaçamento generoso.
* Layouts com bastante respiro.
* Evitar telas muito densas.
* Usar grid/flex de forma limpa.

### Border Radius

* **Small:** `12px`
* **Medium:** `20px`
* **Large:** `32px`
* **Extra Large:** `36px`
* **Pill:** `999px`

### Shadows

Sombras devem ser suaves, quentes e discretas.

Exemplos:

* Card leve: `0 10px 40px rgba(79, 51, 40, 0.08)`
* Card premium: `0 24px 70px rgba(79, 51, 40, 0.16)`
* CTA laranja: `0 16px 36px rgba(226, 132, 19, 0.28)`

Evitar sombra preta dura.

---

## Buttons

### Primary Button

Usar para ação principal.

* Fundo: `#e28413`
* Texto: branco ou marrom escuro, dependendo do contraste.
* Peso: `800` ou `900`
* Caixa alta quando combinar com a tela.
* Radius arredondado ou pill.
* Hover com leve elevação.

### Secondary Button

Usar para ações alternativas.

* Fundo: `#4f3328`
* Texto: `#faf5e9`

### Outline Button

Usar para ações secundárias em hero ou cards.

* Fundo transparente.
* Borda marrom ou branca, conforme o fundo.
* Hover preenchido.

### Ghost Button

Usar em ações discretas, como sair, voltar ou refazer teste.

* Fundo transparente.
* Borda suave.
* Texto marrom.
* Hover com fundo marrom ou creme.

---

## Cards

Cards são elementos centrais da identidade.

Devem ter:

* fundo branco quente ou creme;
* borda suave;
* radius grande;
* sombra leve;
* espaçamento interno confortável.

Cards importantes podem ter:

* detalhe lateral colorido;
* canto superior colorido;
* glow sutil;
* cor relacionada ao perfil sensorial.

Evitar cards secos demais, sem hierarquia visual.

---

## Profile System

Os perfis sensoriais são parte importante da marca.

Cada perfil deve ter:

* nome forte em Anton;
* cor própria;
* ilustração própria;
* descrição curta;
* notas ou atributos em pills;
* sensação de personagem colecionável.

### Visual dos Perfis

* **Iniciante:** acolhedor, suave, confortável.
* **Frutado:** fresco, curioso, leve.
* **Intenso:** marcante, energético, forte.
* **Equilibrado:** limpo, elegante, harmônico.
* **Explorador:** experimental, terroso, descobridor.

### Uso

Quando uma tela exibir o perfil do cliente, ela deve usar:

* cor do perfil;
* nome do perfil em destaque;
* ilustração correspondente;
* cards/pills com dados sensoriais.

Não mostrar perfil apenas como texto solto.

---

## Illustrations

As ilustrações devem seguir o estilo premium já usado no projeto:

* low-poly geométrico;
* formas facetadas;
* aparência de coleção;
* renderização limpa;
* tons quentes;
* sensação de produto premium.

Usar ilustrações dos perfis sempre que a tela falar sobre personalidade, quiz, resultado ou área do cliente.

Evitar imagens genéricas de banco de imagens.

---

## Icons

Usar exclusivamente **Hugeicons Stroke Rounded**.

Ícones devem ser:

* lineares;
* consistentes;
* discretos;
* alinhados com texto;
* usados para reforçar função, não decorar demais.

Não usar emoji como ícone de interface.

---

## Forms

Formulários devem ser simples, claros e premium.

Inputs:

* fundo creme claro;
* borda marrom suave;
* radius entre `16px` e `18px`;
* ícone à esquerda quando fizer sentido;
* foco com borda marrom e glow suave;
* mensagens de erro claras.

Validações:

* erro em vermelho/marrom;
* sucesso em verde;
* mensagens humanas e diretas.

Exemplo:

* “Insira um e-mail válido.”
* “A senha precisa ter pelo menos 8 caracteres.”
* “As senhas precisam ser iguais.”

---

## Auth Screens

Login e cadastro devem parecer parte de um produto premium.

Direção visual:

* layout dividido;
* painel visual à esquerda;
* formulário à direita;
* fundo com imagem/ilustração de café;
* overlay marrom;
* título grande com Anton;
* destaque em laranja apenas no trecho principal.

A tela deve parecer acolhedora, não administrativa.

---

## Quiz Screens

O quiz deve ser limpo, focado e com sensação de experiência guiada.

Elementos importantes:

* card central;
* progresso claro;
* opções grandes e clicáveis;
* botão principal evidente;
* feedback visual na opção selecionada;
* linguagem simples.

O resultado do quiz deve parecer um momento especial, quase uma revelação.

---

## Logged-in Experience

A experiência logada não deve repetir a landing inteira como se o cliente ainda fosse visitante.

A landing deslogada vende a ideia.

A home logada deve parecer uma área personalizada.

Quando o cliente já tem perfil, a interface deve destacar:

* perfil sensorial;
* plano;
* preferências de preparo;
* ações úteis, como refazer teste ou ver planos.

Evitar CTA principal “Fazer Quiz” quando o cliente já fez o quiz. Nesse caso, “Refazer teste” deve ser uma ação secundária.

---

## Admin Area

A área admin deve ser mais funcional, mas ainda consistente com a marca.

Direção:

* layout limpo;
* tabelas legíveis;
* botões claros;
* cards de resumo;
* sidebar ou navegação simples;
* manter cores da marca;
* evitar aparência padrão sem acabamento.

CRUDs devem ser fáceis de usar e visualmente organizados.

---

## Tables

Tabelas devem ser usadas principalmente no admin.

Estilo:

* cabeçalho com fundo creme ou marrom;
* linhas com espaçamento confortável;
* ações bem identificadas;
* botões pequenos mas legíveis;
* evitar tabelas espremidas.

No mobile, usar scroll horizontal ou cards empilhados.

---

## Motion

Animações devem ser suaves e rápidas.

Usar:

* hover com leve subida;
* transições de `0.2s` a `0.4s`;
* entrada suave em cards importantes;
* microinterações em botões.

Evitar animações exageradas ou lentas.

---

## Do's

1. Usar `#faf5e9` como base de fundo.
2. Usar `#4f3328` como cor principal.
3. Usar `#e28413` apenas para destaque.
4. Usar Anton em títulos de impacto.
5. Usar Inter para interface e leitura.
6. Usar cards arredondados com sombras suaves.
7. Usar ilustrações dos perfis nas experiências personalizadas.
8. Usar cores dos perfis para reforçar identidade sensorial.
9. Manter a interface limpa e respirada.
10. Reaproveitar classes existentes antes de criar novas.

## Don'ts

1. Não usar emoji na interface.
2. Não usar branco puro como fundo principal de página.
3. Não criar botões laranja demais na mesma tela.
4. Não usar sombras pretas duras.
5. Não deixar tela com cara de Bootstrap cru.
6. Não repetir a landing de venda para usuário já logado.
7. Não mostrar dados importantes apenas como texto solto.
8. Não criar CSS duplicado sem verificar `style.css` e `quiz.css`.
9. Não criar links para rotas inexistentes.
10. Não poluir o header com muitas ações.
