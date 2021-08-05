<?php $v->layout('_template'); ?>

<br><br>
<div id="login_error"></div>
<div id="cpf_error"></div>
<div id="cidade_error"></div>
<div id="rua_error"></div>
<div id="telefone_error"></div>
<div id="senha_error"></div>
<div id="email_error"></div>

<pre>
    <?php var_dump($itemsChar);  ?>
</pre>

<?php 
    foreach ($itemsChar as $value) {
        echo"<pre>";
        var_dump($value->data() ) ;
        echo "count é = : " . $value->data()->count . "<br>"; 
        echo "loc é = : " . $value->loc; 
        echo"</pre>";
    }
?>

<br><br>
<h4>Register</h4>
<hr>
<form style="margin-bottom: 500px;">
    <input type="text" name="login" id="login" placeholder="login" autofocus="" autocomplete="">
    <input type="text" name="cpf" id="cpf" placeholder="cpf">
    <input type="text" name="cidade" id="cidade" placeholder="cidade">
    <input type="text" name="rua" id="rua" placeholder="rua">
    <input type="text" name="telefone" id="telefone" placeholder="telefone">
    <input type="password" name="senha" id="senha" placeholder="senha">
    <input type="email" name="email" id="email" placeholder="email">
    <button type="submit" id="registrar">enviar</button>
</form>


<?php $v->start('js'); ?>

<script>
      $('body').css('background','white');
</script>

<?php $v->end(); ?>