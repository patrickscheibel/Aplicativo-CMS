<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title', ['minLength' => 10]);
    echo $this->Form->control('body', ['rows' => '3', 'minLength' => 10]);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
