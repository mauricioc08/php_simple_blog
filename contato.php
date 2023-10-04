<?php
    include_once("./templates/header.php");
?>
    <div class="contatoContainer">
        <h1>Página de Contato!!!</h1>
        <div class="container">
        <form action="#">

        <label for="name">Nome</label>
        <input type="text" id="fname" name="nome" placeholder="Seu nome..">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Seu e-mail..">


        <label for="subject">Mensagem</label>
        <textarea name="mensagem" placeholder="Sua mensagem.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

        </form>
        </div>
    </div>
    
<?php
    include_once("./templates/footer.php");
?>