<!-- File: src/Template/Articles/view.ctp -->
<div class="card text-center mx-auto" style="width: 50rem;">
    <div class="card-body">
        <h2 class="card-title"><?= h($article->title) ?></h2>
        
        <p class="text-justify"><?= h($article->body) ?></p>
        <p class="text-left"><small>Criado: <?= $article->created->format(DATE_RFC850) ?></small></p>

    </div>
</div>