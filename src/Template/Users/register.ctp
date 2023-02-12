<div class="login">
    <h1 class="text-center ">Please Register</h1>
  <div class="row d-flex text-center">
        <div class="col-md-4">

            <?= $this->Form->create($user) ?>
            <?= $this->Form->input('firstname',['class'=>'form-control']) ?>
            <?= $this->Form->input('lastname',['class'=>'form-control']) ?>
            <?= $this->Form->input('username',['class'=>'form-control']) ?>
            <?= $this->Form->input('email',['class'=>'form-control']) ?>
            <?= $this->Form->input('password',['class'=>'form-control']) ?>
            <?= $this->Form->submit('Register',['class'=>'btn btn-success ']) ?>

            <?= $this->Form->end(); ?>
       </div> 
   </div>
</div>