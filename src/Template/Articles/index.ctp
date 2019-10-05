<h2>Blog articles</h2>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Operations</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($articles as $article) : ?>
        <tr>
            <td><?= $article->id ?></td>
            <td>
                <strong>
                    <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                </strong>

            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>

            <td>
                <button class="btn btn-outline-danger">
                    <?= $this->Form->postLink(
                            'Deletar',
                            ['action' => 'delete', $article->id],
                            ['confirm' => 'Tem certeza?']
                        )
                        ?>
                </button>
                <button class="btn btn-outline-secondary">
                    <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?>
                </button>

            </td>
        </tr>
    <?php endforeach; ?>
</table>

<button type="button" class="btn btn-dark mt-2 float-right">
    <strong>
        <?= $this->Html->link('Novo', ['action' => 'add']) ?>
    </strong>

</button>

<style>
    strong {
        color: black;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:link,
    a:visited {
        text-decoration: none
    }


    a:active {
        text-decoration: none;
        color: red;
    }

    a:hover {
        text-decoration: none;
        color: black;
    }
</style>