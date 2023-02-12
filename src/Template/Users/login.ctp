<div class="login">
    <h1 class="text-center ">Login</h1>
  <div class="row d-flex text-center">
        <div class="col-md-4">

            <?= $this->Form->create() ?>
            <?= $this->Form->input('username',['class'=>'form-control']) ?>
            <?= $this->Form->input('password',['class'=>'form-control']) ?>
            <?= $this->Form->button('Login',['class'=>'btn btn-success ']) ?>
            <?= $this->Html->link(__('Register'), ['action' => 'register'],['class'=>'btn btn-primary ']) ?>
            <?= $this->Form->end() ?>
           
          
       </div> 
   </div>
</div>