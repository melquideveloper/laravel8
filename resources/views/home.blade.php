{{-- Essa linha insere o HEADER arquivo que esta em  views/indexestructure/header.blade.php passando 2 parâmentros--}}
{{-- include'IF' o if determina se caso não houver não cairá n o erro de não existir --}}
@includeIF( 'indexestructure.header' , ['param1'=>'primeiro', 'param2'=>'ultimo'])

{{-- Essa linha insere o FOOTER arquivo que esta em  views/indexestructure/footer.blade.php passando 2 parâmentros--}}
{{-- include'FIRST' inclui a primeira ocorrência existente no array ['','',''] --}}
@includeFIRST([ 'indexestructure.blade1','indexestructure.blade2','indexestructure.footer']  ,  ['param1'=>'primeiro', 'param2'=>'ultimo']) 

{{-- Essa linha insere o arquivo que esta em  views/indexestructure/footer.blade.php passando 2 parâmentros
include'WHEN' testa uma condição==condição para incluir arquivo --}}
{{--@includewhen(true==true, 'indexestructure.footer'  ,  ['param1'=>'primeiro', 'param2'=>'ultimo'])--}}