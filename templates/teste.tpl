
<body>
    Bem vindo
    
    <hr>
    {foreach from=$array item=data}
        <p>Nome: {$data.nome}
        <p>Email: {$data.email}
    {/foreach}
</body>
</html>