<h1>Login</h1>
<div class="user form">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend>Please enter email and password</legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')) ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>