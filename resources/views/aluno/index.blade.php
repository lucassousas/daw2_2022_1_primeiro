<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="/aluno">
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" value="{{$aluno->nome}}" /> 
        </div>
        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{$aluno->email}}" />
        </div>
        <div>
            <label>Gênero:</label>
            <select name="genero">
                <option value=""></option>
                <option value="M" {{$aluno->genero == "M" ? "selected" : ""}} >Masculino</option>
                <option value="F" {{$aluno->genero == "F" ? "selected" : ""}} >Feminino</option>
                <option value="N">Não declarado</option>
            </select>
        </div>
        <div>
            <label>Observações:</label>
            <textarea name="obs" heigh="2">{{$aluno->obs}}</textarea>
        </div>  
        <div>
            @csrf
            <input type="hidden" name="id" value="{{$aluno->id}}" />
            <button type="submit">Salvar</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>
                        {{$aluno->nome}}
                    </td>
                    <td>
                        {{$aluno->email}}
                    </td>
                    <td>
                        <a href="/aluno/editar/{{$aluno->id}}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <a href="/aluno/excluir/{{$aluno->id}}">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>