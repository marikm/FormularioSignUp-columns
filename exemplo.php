<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
    <link rel="stylesheet" href="./exemplo-css.css">
</head>
<body>
    <h1>Sistema de Login : :&nbsp;<b>Cadastro</b></h1>    
    <!-- MENU -->
    <?php include_once("./_menu.php"); ?>
    <!-- FIM MENU -->

    <main>
        <div class="container">
            <form action="cad-loginbd.php" method="POST" enctype="multipart/form-data">
                <div class="row-fluid">
                    
                    <div class="col-1" >                    
                        <div style="cursor: pointer;">                        
                            <label for="foto">
                                <img 
                                    id="imagem" 
                                    src="./img/perfil.png" 
                                    style="max-width: 130px;"
                                    alt="">
                            </label>
                            <input type="file" name="foto" id="foto" style="display:none">
                        </div>
                    </div>

                    <div class="col">
                        <label for="nomeLogin">Nome Completo</label>
                        <input type="text" 
                            name="nomeLogin" 
                            id="nomeLogin"
                            placeholder="Nome completo">
                    </div>
                </div>

                <!-- endereço -->
                <div class="row-fluid">
                    <div class="col">
                        <label for="enderecoLogin">Endereço para correspondência</label>
                        <input type="text" 
                            name="enderecoLogin" 
                            id="enderecoLogin"
                            placeholder="Endereço completo">
                    </div>
                </div>

                <!-- Email e telefone -->
                <div class="row-fluid">
                    <!-- email -->
                    <div class="col">
                        <label for="emailLogin">Email para profissional </label>
                        <input type="email" 
                            name="emailLogin" 
                            id="emailLogin"
                            placeholder="Email para contato">
                    </div>

                    <!-- telefone -->
                    <div class="col">
                        <label for="telefoneLogin">Telefone profissional</label>
                        <input type="tel" 
                            name="telefoneLogin" 
                            id="telefoneLogin"
                            placeholder="Celular preferencialmente">
                    </div>
                </div>

                <!-- Nível e Status -->
                <div class="row-fluid">
                    <div class="col">
                        <label for="nivel">Nível</label>
                        <select name="nivel" id="nivel">
                            <option value="0">Usuário</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="0">Desativado</option>
                            <option value="1">Ativo</option>
                        </select>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row-fluid">
                    <div class="col">
                        <label for="senha1">Senha</label>
                        <input type="password" 
                            name="senha1" 
                            id="senha1"
                            placeholder="Informe uma senha com oito caracteres!">
                        <p class="senha-erro">Senhas diferentes</p>                        
                    </div>
                    
                    <div class="col">
                        <label for="senha2">Confirmação de senha</label>
                        <input type="password" 
                            name="senha2" 
                            id="senha2"
                            placeholder="Informe uma senha com oito caracteres novamente!">
                        <p class="senha-erro">Senhas diferentes</p>
                    </div>
                </div>

                <div class="space10v"></div>

                <!-- Botões de ação -->
                <div class="row-fluid justify-center">
                    <input type="reset" value="Voltar" onclick="javascript:history.go(-1);">
                    <input type="submit" value=" S A L V A R " disabled id="submit">
                </div>
            </form> 
        </div>
    </main>

    <script src="./javascript.js"></script>

    <!-- MENU -->
    <?php include_once("./_rodape.php"); ?>
    <!-- FIM MENU -->
</body>
</html>