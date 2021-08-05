<div class=" mt-4">
    <h4>Register</h4>
    <hr>
    <div class="row ">
        <div class="col-2 col-sm-2 col-md-3 "></div>
        <div class="col-8 col-sm-8 col-md-6">
            <form id="form-register" action="<?=$router->route('goat.request.register'); ?>" data-type="JSON" method="POST">
            
                <input type="text" name="login-register" class="form-control my-1" id="loginRegister" placeholder="login " autofocus="" autocomplete="">
                <input type="password" name="password-register" class="form-control my-1" id="password-register" placeholder="senha">
                <input type="password" name="repeat_password" class="form-control my-1" id="repeat_password" placeholder="repita senha">
                <input type="email" name="email" id="email" class="form-control my-1" placeholder="email">

                <button type="submit" id="buttonRegister" class="btn btn-primary btn-block mt-3">Registrar</button>
                <div class="load text-center"></div>
            </form>
        </div>
        <div class=" col-2 col-sm-2 col-md-3"></div>
    </div>
</div>
