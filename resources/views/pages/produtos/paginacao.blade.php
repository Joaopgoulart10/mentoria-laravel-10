{{--Extende da classe index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Produtos</h1>
    </div>  
    <div>
        <form action="" method="GET">
            <input type="text" name="pesquisarProduto" placeholder="Digite o nome do produto"/>
            <button>Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-end">
                Incluir Produto
            </a>
        </form>
      <div class="table-responsive md-4">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Valor</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($findAllProdutos as $produto) <!--Ele tem que virar $Produtos como parametro p pegar no banco -->
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{ 'R$' . '' . number_format ($produto->valor, 2, ',','.') }}</td>
                    <!--Aqui ele está transformando os pontos em virgulas-->
                    <td>
                        <a href="#" class="btn btn-light btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
            
          </tbody>
    </div>
@endsection