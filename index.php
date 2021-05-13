<?php
    require('./src/db_conn.php');
?>

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
            <?php 
                $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
              ?>

            <div class="show-todo-section">
                <?php if ($todos->rowCount() <= 0) { ?>
                        <div class="todo-item">
                            <input type="checkbox">
                            <div class="empty">>
                                <img src="./public/img/f.png" width="100%" alt="f">
                                <img src="./public/img/Ellipsis.gif" width="100%" alt="Ellipsis">
                            </div>
                        </div>
                <?php } ?>
                
                <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)){  ?>
                    <div class="todo-item">
                        <span id="<?php $todo['id']; ?>" class="remove-to-do">x</span>
                        
                        <?php if($todo['checked']){ ?>
                            <input type="checkbox" class="check-box" checked />
                            <h2 class="checked"><?php echo( $todo['title'] );?></h2>
                        <?php } else { ?>

                        <input type="checkbox">
                        <h2><?php echo($todo['title']);?></h2><br>
                        
                        <?php } ?>
                        <small>Adicionado em: <?php echo($todo['date_time']);?></small>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>