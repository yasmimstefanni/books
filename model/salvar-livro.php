<?php
require_once "Conexao.php";
$nome_livro = $GET["txt_livro"];
$sql = "INSERT INTO public.book
  (nome, paginas, autor)
  VALUES ('$nome_livro', 100, '???');";

conexao::exec($sql);