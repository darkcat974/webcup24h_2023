<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
include "webroot/css/normalize.min.css";
include "webroot/css/milligram.min.css";
include "webroot/css/cake.css";
include "webroot/css/home.css";
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __("S'incrire") ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('username');
                    echo $this->Form->control('text');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
