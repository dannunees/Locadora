<html>

<body>


    <label for="nome">Digite um nome:</label>
    <input type="text" id="txtNome" /> 
    <button id="btnBuscar">Buscar</button>

    <hr/>

    <div id="resultado">
        Nome: <span id="res_nome"> <br/>
        Email: <span id="res_email"> <br/>
        Senha: <span id="res_senha">
    </div>

</body>


<script src="axios.js"></script>

<script>

    document.getElementById('btnBuscar').onclick = function(){

        let nome = document.getElementById('txtNome').value

        let params = new URLSearchParams();
        params.append('txtNome', nome);

        axios({
            url: 'autenticarComAjax.php',
            method: 'post',
            responseType: 'json',
            data: params
        })
        .then(resposta => {
            console.log(resposta)

            document.getElementById('res_nome').innerHTML = resposta.data.nome
            //document.getElementById('res_email').innerHTML = resposta.data.email
            //document.getElementById('res_senha').innerHTML = resposta.data.senha
        })
        .catch(erro => {
            alert(erro)
        })

    }


</script>

</html>