
<h2>Blog articles</h2>

<?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?>
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
                <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            
            <td>
                <?= $this->Form->postLink(
                        'Deletar',
                        ['action' => 'delete', $article->id],
                        ['confirm' => 'Tem certeza?']
                    )
                    ?>
                <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>


</table>