<h1>Pagina dos Produtos</h1>

<hr>

<form action="" method="post">
@csrf <!--parametro de segurança para o formulário que gera um tokem nas requisições -->

<b>Produto</b>
<input type="text" name="produto"><br><br>

<b>Categoria</b>
<input type="text" name="categoria"><br><br>

<b>Preço</b>
<input type="text" name="preco"><br><br>

<input type="submit" name="" id="submitCadProduto">
   
</form>

<hr>

<label for="">Produto: {{$produto??''}}</label>
<label for="">Categoria: {{$categoria??''}}</label>
<label for="">Preço: {{$preco??''}}</label> 
