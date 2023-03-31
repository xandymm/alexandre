<?php
include_once __DIR__ . '/../db.php';

$BASE_URL = './../';
include_once __DIR__ . '/../header.php';
?>
<!-- ### $App Screen Content ### -->
<main class="main-content bgc-grey-100">
  <div id="mainContent">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-4">

          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb breadcrumb-inverse">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item">Usuários </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <div class=" peers fxw-nw jc-sb ai-c mB-20">
              <h4 class="c-grey-900 mB-20">Listagem de Usuários</h4>

              <a href="users/add.php">
                <button type="button" class="btn cur-p btn-primary btn-color">Adicionar</button>
              </a>
            </div>
            <table id="dataTable" class="table table-striped table-bordered mT-10" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Username</th>
                  <th>E-mail</th>
                  <th>Contacto</th>
                  <th>Acção</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // faz a seleção do dados na Tabela	
                $data = mysqli_query($connection, "SELECT * FROM users ORDER BY id ASC");
                // lista os dados
                while ($value = mysqli_fetch_array($data)) {

                  // PDO
                  // $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
                  // $stmt->execute();
                  // $values = $stmt->fetchAll();

                  // foreach($values as $value) {
                ?>
                  <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['contact'] ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="First group">
                        <a href="users/edit.php?id=<?php echo $value['id'] ?>">
                          <button type="button" class="btn cur-p btn-primary btn-color">Editar</button>
                        </a>
                        <a href="users/deleteQuery.php?id=<?php echo $value['id'] ?>">
                          <button type="button" class="btn cur-p btn-danger btn-color">Excluir</button>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- ### $App Screen Footer ### -->
<?php
include_once __DIR__ . '/../footer.php';
?>