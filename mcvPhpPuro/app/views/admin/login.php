<div class="container" style="text-align: center;">
  <h2>Admin Login</h2>
    
  <form action="/adminLogin/store" method="POST">
    <input type="text" placeholder="E-mail" name="email">
    <input type="text" placeholder="Senha" name="password">
    
    <button type="submit">Logar</button><a href="/" style="margin-left: 2%;">Voltar</a><br><br>

    <?php echo flash('login')?>
</form>
</div>
