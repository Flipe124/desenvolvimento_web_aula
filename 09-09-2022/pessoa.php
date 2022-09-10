<?php
include './private/connection.php';
include './layout/header.php';

// TRABALHO VAI SER FAZER ESSE SISTEMA COMPLETO

$txtSubmit = (isset($_GET['id']) ? 'Editar' : 'Cadastrar');

if (isset($_GET['id'])) {
    $sqlQuery = "SELECT * FROM pessoa WHERE id= '{$_GET['id']}'";
    if ($result = mysqli_query($mysqli, $sqlQuery)) {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
    }
}
// print_r($_POST);
if (isset($_POST['id'])) {
    if ($_POST['id'] != '') {
        $sqlInsert = "UPDATE pessoa nome, sexo, doc WHERE id={$_POST['id']}";
        $stmt = $mysqli->prepare($sqlInsert);

        if (!$stmt) {
            echo "Erro: " . $mysqli->error;
        }

        $stmt->bind_param('sss', $_POST["nome"], $_POST["sexo"], $_POST["doc"]);
        $stmt->execute();
    } else {
        $sqlInsert = "INSERT INTO pessoa (nome, sexo, doc) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sqlInsert);

        if (!$stmt) {
            echo "Erro: " . $mysqli->error;
        }

        $stmt->bind_param('sss', $_POST["nome"], $_POST["sexo"], $_POST["doc"]);
        $stmt->execute();
    }
}


?>

<div class="container bg-light">
    <form action="./pessoa.php" method="post">
        <div class="row mt-2">
            <div class="col-md-6">
                <label>Nome:</label>
                <input class="form-control" name="nome" type="text" value="<?php echo @$row['nome'] ?>">
            </div>
            <div class="col-md-2">
                <p>Sexo:</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" <?= (@$row['sexo'] == 'F') ? 'checked' : '' ?> name="sexo" id="inlineRadio1" value="f">
                    <label class="form-check-label" for="inlineRadio1">F</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" <?= (@$row['sexo'] == 'M') ? 'checked' : '' ?> name="sexo" id="inlineRadio2" value="m">
                    <label class="form-check-label" for="inlineRadio2">M</label>
                </div>
            </div>
            <div class="col-md-4">
                <label>CPF</label>
                <input class="form-control" name="doc" type="text" value="<?php echo @$row['doc'] ?>">
            </div>
            <div class="col-md-12 mt-2 text-end">
                <input type="hidden" name="id" id="<?php echo @$row['id'] ?>">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-plus"></i> <?php echo $txtSubmit ?></button>
            </div>
        </div>
    </form>
    <hr>
    <div class="col-md-12 mt-2">
        <h2>Clientes <i class="fa-solid fa-user"></i></h2>

    </div>
    <div class="col-md-12">

        <table class="table table-striped table-hover">
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Documento</th>
                <th>Endereço</th>
                <th class="text-end"><label style="margin-right: 160px;">Ações</label></th>
            </tr>

            <?php
            $sqlQuery = "SELECT * FROM pessoa";
            if ($result = mysqli_query($mysqli, $sqlQuery)) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
                        <tr>
                            <td>{$rows['nome']}</td>
                            <td>{$rows['sexo']}</td>
                            <td>{$rows['doc']}</td>
                            <td>{$rows['endereco']}</td>
                            <td class='text-end'>
                                <button class='btn btn-danger'><i class='fa-solid fa-trash'></i> EXCLUIR</button>
                                <button class='btn btn-primary'><i class='fa-solid fa-pen'></i> EDITAR</button>
                            </td>

                        <tr/>
                    ";
                }
                mysqli_free_result(($result));
            }
            ?>

        </table>
    </div>

</div>



<?php include './layout/footer.php'; ?>