<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <nav class="navbar navbar-default mt-3">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
   <a href="" class="navbar-brand">CRUD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><?= $this->Html->link(__('Logout'), ['action' => 'logout']) ?></li> 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<nav class="col-md-2 " id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form col-md-6  content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('firstname',['class'=>'form-control']);
            echo $this->Form->control('lastname',['class'=>'form-control']);
            echo $this->Form->control('username',['class'=>'form-control']);
            echo $this->Form->control('email',['class'=>'form-control']);
            echo $this->Form->control('password',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success ']) ?>
    <?= $this->Form->end() ?>
</div>
