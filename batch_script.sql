create database fseletro;
use fseletro;

create table produtos (
    id          int             identity,
    categoria   varchar(100),
    descricao   varchar(500),
    preco       float,
    preco_venda float,
    imagem      varchar(100),

    primary key (id)
);

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values
        ("geladeira", "Geladeira Frost Free Brastemp Side Inverse 540 litros", 6839.00, 5019.00, "imagens/produtos/geladeira_consul.webp")
    ,   ("geladeira", "Geladeira Frost Free Brastemp Branca Inverse 375 litros", 2068.60, 1910.90, "imagens/produtos/geladeira_frostFree_branca.webp")
    ,   ("geladeira", "Geladeira Frost Free Consul Prata 340 litros", 2199.00, 2069.00, "imagens/produtos/geladeira_consul.webp")
    ,   ("fogao", "Fogão 4 bocas Consul Inox com mesa de vidro", 1200.00, 1129.00, "imagens/produtos/fogao_consul.webp")
    ,   ("fogao", "Fogão de piso 4 bocas Atlas Monaco com ascendimento automático", 609.00, 519.70, "imagens/produtos/fogao_monaco.jpg")
    ,   ("microondas", "Microondas Consul 32L Inox 220V", 580.00, 409.88, "imagens/produtos/microondas_consul.webp")
    ,   ("microondas", "Microondas 25L Espelhado Philco 220V", 508.70, 464.53, "imagens/produtos/microondas_philco.png")
    ,   ("microondas", "Microondas Eletrolux 20L Branco", 459.00, 436.05, "imagens/produtos/microondas_eletrolux.jpg")
    ,   ("lava-louça", "Lava-louça Eletrolux Inox com 10 seriços, 06 Programas de Lavagem e painel Blue Touch", 3599.00, 2799.90, "imagens/produtos/lavaLouca_eletrolux.webp")
    ,   ("lava-louça", "Lava_louça Compacta 8 serviços branca 127V Brastemp Side Inverse 540 Litros", 1970.50, 1730.61, "imagens/produtos/lavaLouca_Brastemp.webp")
    ,   ("lavadora de roupa", "Lavadora de Roupa Brastemp 11kg com Turbo Performance Branca", 1600, 1214.10, "imagens/produtos/lavaroupa.png")
    ,   ("lavadora de roupa", "Lavadora de Roup Philco 12kg", 2390.00,2179,90, "imagens/produtos/lavador_philc.png")