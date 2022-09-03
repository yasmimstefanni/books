<html>
  <head>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Books</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<script src="script.js" defer></script>
  </head>
  <body>
    
  <header>
    <aside>
      <form action="">
        <div class="form-group  btn-lg col-md-6">
          <label for="txt_email">E-mail</label>
          <input type="email" name="txt_email" id="txt_email" class="form-control">
        </div>
        <div class="form-group btn-lg col-md-6">
          <label for="txt_senha">Senha</label>
          <input type="password" name="txt_senha" id="txt_senha" class="form-control">
        </div>
        <a href="#">Esqueci a senha</a>
        <div>
          <input type="submit" value="Login"
            class="btn btn-primary btn-dark">
          <a href="#" class="btn btn-primary btn-dark">Cadastre-se
          </a>   
        </div>
      </form>  
    </aside>
    <h1>
      <?= "Skoob";?>
    </h1>
    <h2>
      <?php echo ""?>
    </h2>
  </header>
  <main>
    <form action="">
      <div class="form-inline justify-content-center">
        <input type="text" name="txt-livro" id="txt_livro" class="form-control">
        <input type="button" value="Salvar" class="btn btn-primary btn-outline-dark" onclick="criarLivro()">
      </div> 
    </form>
    <section id=sessaoLivros>
      <?php require_once "model/Conexao.php"; $sql = "SELECT * FROM book;";
       if(!Conexao::execWithReturn($sql)){
       echo Conexao::getErro(); exit(1); }

       /*print_r(Conexao::getData());*/
         foreach(Conexao::getData() as $livro):
      ?>
      <article>
        <div class="col-xs-6 col-md-3">
          <img src="https://images-na.ssl-images-amazon.com/images/I/91H5Os4GLAL.jpg"alt="Foto do livro"> 
        </div>
        <div class="livro-dados">
          <h3>Livro: <span>
           <?= $livro["nome"]?>
           </span></h3>
          <h3>Páginas: <span><?= $livro["paginas"]?></span></h3>
          <h3>Autor /a/as/es: <span>
           <?= $livro["autor"]?>
          </span></h3>
        </div>
        <div>
          <div class="marcador">
            <span class="material-icons">book</span>
            <span class="contador">12</span>    
        </div>  
          <div class="marcador">
            <span class="material-icons">favorite</span>
            <span class="contador">12</span>    
        </div>  
      </article>
           <?php endforeach; ?>
    </section>
</main>
        </body>
  </html>