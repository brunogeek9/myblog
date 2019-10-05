<h1>Add Article</h1>
<?php
// echo $this->Form->create($article);
// echo $this->Form->input('title');
// echo $this->Form->input('body', ['rows' => '3']);
// echo $this->Form->button(__('Salvar artigo'));
// echo $this->Form->end();

echo $this->BootsCakeForm->create($article);
echo $this->BootsCakeForm->control('title');
echo $this->BootsCakeForm->control('body');
echo $this->BootsCakeForm->control(__('Salvar'), ['type' => 'submit', 'color' => 'primary']);
echo $this->BootsCakeForm->end();
?>