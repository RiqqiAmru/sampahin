<?php
$this->extend('template');
$this->section('content');
?>
<form action="<? base_url('login/masuk') ?>" method="post">
    <div class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" name="username">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php $this->endSection(); ?>