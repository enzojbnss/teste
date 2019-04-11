// JavaScript source code
atualizar("ba643b01402f40a5936cee7f507d6ab3bead9737", 625106926, "Fort Safe");
atualizar("1db5ab649edd734ec31a2d46b947f84934830f51", 632068599, "Cofres SP");




function atualizar(token,id,loja) {
    $.ajax({
        method: 'POST',
        url: "https://api.tiny.com.br/api2/produto.atualizar.estoque.php",
        xhrFields: {
            withCredentials: true
        },
        data: {
            "token": token,
            "estoque": {"estoque": { "idProduto" : id, "quantidade": "3.00", "precoUnitario": "0.00", "observacoes": "Ajuste de estoque" }},
            "formato": "formato"
        }
    }).done(function (retorno) {
        alert("estoque da " + loja + " alterado com sucesso!");
    });

    
}