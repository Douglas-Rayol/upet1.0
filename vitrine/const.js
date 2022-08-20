
const alimentos = [
            {
                id: 0,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rg.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 1,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rpp.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 2,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rs.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 3,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rp.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
        ]

const roupas = [
            {
                id: 0,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rm.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 1,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rv.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 2,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/ry.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
            {
                id: 3,
                nome: 'Ração Seca Origens Premium Especial Frango e Cereais Cães Adultos',
                img: '../css/img/rc.jpg',
                preco: 'R$ 2,99',
                quantidade: 0
            },
        ]        

        liAlimento = () => {
            var containerAlimentos = document.getElementById('alimento');
            alimentos.map((val)=>{
                containerAlimentos.innerHTML += `
                <a key="`+val.id+`" href="#">
                    <div class="produto-single">
                        <img src="`+val.img+`" style="max-width: 100%" />
                        <p>`+val.nome+`</p>
                        <a href="#" class="preco">`+val.preco+`</a>
                    </div>
                </a>
                `;
            });
        }

        liAlimento();

        liRoupas = () => {
            var containerRoupas = document.getElementById('roupa');
            roupas.map((val)=>{
                containerRoupas.innerHTML += `
                <a key="`+val.id+`" href="#">
                    <div class="produto-single">
                        <img src="`+val.img+`" style="max-width: 100%" />
                        <p>`+val.nome+`</p>
                        <a href="#" class="preco">`+val.preco+`</a>
                    </div>
                </a>
                `;
            });
        }

        liRoupas();

        atualizarCarrinho = () => {
            var containerCarrinho = document.getElementById('carrinho');
            containerCarrinho.innerHTML = "";
            itens.map((val)=>{
                if(val.quantidade > 0){
                containerCarrinho.innerHTML += `
                    <div class="info-single-checkout">
                        <p style="float:left;">`+val.nome+`</p>
                        <p style="float:right;">Quantidade: `+val.quantidade+`</p>
                        <div style="clear:both"></div>
                    
                    </div>
                `;
                }
            });
        }

        var links = document.getElementsByTagName('a');

        for(var i = 0; i < links.length; i++){
            links[i].addEventListener("click", function(){
                let key = this.getAttribute('key');
                itens[key].quantidade++;
                atualizarCarrinho();
                return false;
            })
        }

        //Carrossel de Slides
        let count = 1;

        document.getElementById("radio1").checked = true;

        setInterval(function(){
            nextImage();
        }, 5000)

        function nextImage(){
            count++;
            if(count>4){
                count=1;
            }

            document.getElementById("radio"+count).checked = true;
        }
        //Fim do Carrossel de Slides
