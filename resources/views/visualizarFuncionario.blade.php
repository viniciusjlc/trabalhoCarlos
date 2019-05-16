@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Funcionarios:</h3>
<div class="tabela-visualizacao">                  
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Login</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Categoria</th>
                <th>Salario</th>
                <th>Comissão Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach ($listaFuncionario as $func)
            <tr>
                <td>{{$func->nome}}</td>
                <td>{{$func->cpf}}</td>
                <td>{{$func->email}}</td>
                <td>{{$func->login}}</td>
                <td>{{$func->telefone}}</td>
                <td>{{$func->sexo}}</td>
                <td>{{$func->idade}}</td>
                <td>{{$func->endereco}}</td>
                <td>{{$func->categoria->descricao}}</td>
                <td>SALARIO</td>
                <td>COMISSÃO</td>
                <td><button type="submit" class="btn btn-default">Excluir</button></td>
            </tr>	
            @endforeach	 
        </tbody> 
        <!-- DADOS [FIM] -->
    </table>
</div>
@endsection
