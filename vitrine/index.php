<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine da Loja</title>
    <link rel="stylesheet" href="../css/vitri.css">
</head>
<body>
    <h2> Vitrine</h2>
    <div id="produtos">
        
    </div><br><br>
    
    <h2>Carrinho</h2>
    <div id="carrinho">
        
    </div>

    <script>
        const items = [
            {
                id: 0,
                nome:'Ração',
                img: '../css/rc.jpg',
                quantidade: 0
            },
            {
                id: 1,
                nome: 'Brinquedo',
                img: '../css/b.jpg',
                quantidade: 0
            },
            {
                id: 2,
                nome:'Roupa',
                img:'../css/ro.jpg',
                quantidade: 0
            },
        ]

        inicializarLoja = () => {
            var containerProdutos = document.getElementById('produtos');
            items.map((val)=>{
                console.log(val.nome);
                containerProdutos.innerHTML+=`
                <div class="produto">
                  <img src="`+val.img+`" />
                  <p>`+val.nome+`</p>
                  <a key="`+val.id+`" href="#">Adicionar ao carrinho!<a/>
                </div>
                `;
            })
            
        }

        inicializarLoja();  
        
        atualizarCarrinho = () => {
            var containerCarrinho = document.getElementById('carrinho');
            containerCarrinho.innerHTML = "";
            items.map((val)=>{
                if(val.quantidade > 0){
                containerCarrinho.innerHTML+=`
                <div class="card">
                    <p style="float:left;">Protudo: `+val.nome+`</p>
                    <p style="float:right;">Quantidade: `+val.quantidade+`</p>
                    <div style="clear:both"></div>
                </div>

                `;
                }
            })
        }

        var links = document.getElementsByTagName('a');

        for(var i = 0; i < links.length; i++){
            links[i].addEventListener("click", function(){
                let key = this.getAttribute('key');
                items[key].quantidade++;
                atualizarCarrinho();
                return false;
            })
        }
    </script>
</body>
</html>