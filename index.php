<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/css/index.css">
    <title>Lista dos Afazeres</title>
</head>
<body>
    <div class="main-section">
    <!-- adicionando sessão -->
        <div class="add-section">
            <form action="">
                <input type="text" name="title" id="title" placeholder="Este campo é requerido..">
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </div>

        <!-- Exibindo a sessão-->
        <div class="show-todo-section">
            <div class="todo-item">
                <input type="checkbox">
                <h2>Este é um todo list</h2><br>
                <small>created: 3/3/2021</small>
            </div>
        </div>
    </div>
</body>
</html>