
# Shortocode para utilizar a técnica Image replacement

Esse é um código feito para utilizar em qualquer site WordPress.


## Como instalar

1. Copiar o código dentro do arquivo shortcode.php 
2. Inserir o código dentro do WordPress (isso pode ser feito tanto pelo arquivo functions.php ou utilizar algum plugin de inserção de código PHP)

Utilizar o shortocode abaixo no local que deseja renderizar a função
### [image_replacement tag="h1" text="Seu Texto H1 Aqui" url="https://example.com/sua-imagem.jpg" width="100%" link="https://example.com"]

## Explicação
tag="h1" - Você pode definir a tag html que deseja renderizar.

text="Seu Texto H1 Aqui" - Texto a ser oculto.

url="https://example.com/sua-imagem.jpg" - Link da imagem

width="100%" - Você pode definir a largura. Observe que a altura sempre será automatica e você pode utilizar qualquer atributo de largura (px, em, wv e etc).


link="https://example.com" - Link para o atributo <a>. Se você não inserir nenhuma informação e deixar vazio, ele tem validação para não inserir o atributo.




## Exemplo de uso
[image_replacement tag="h1" text="R Pedras" url="https://jrpedras.hostotimaideia.com.br/wp-content/uploads/2024/07/jr-pedras-logo.svg" width="200px" link="https://jrpedras.hostotimaideia.com.br"]
