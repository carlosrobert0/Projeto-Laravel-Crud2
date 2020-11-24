<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Exclusao Produto</title>
</head>
<body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Deseja realmente excluir o produto a seguir ?</label> <br/>
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br/>
        <button>Sim</button>
    </form>
</body>
</html>
