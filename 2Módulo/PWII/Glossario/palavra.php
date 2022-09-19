<?php include('templates/head.php'); ?>

    <section class="palavra">
        <form action="">

            <div>
                <input type="text" placeholder="Palavra">
            </div>

            <div>
                <input type="text" placeholder="Descrição">
            </div>

            <div>
                <input type="text" placeholder="Imagem">
            </div>

            <div>
                <input type="text" placeholder="Link">
            </div>

            <div>
                <input type="submit" placeholder="Salvar" class="btn btn-info">
            </div>

        </form>

    </section>

    <section>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Palavra</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Link</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

    </section>


    <?php include("templates/footer.php"); ?>