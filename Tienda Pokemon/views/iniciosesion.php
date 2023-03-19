<form class="form" action="index.php?controller=UsersController&action=validariniciosesion" method='POST'>
      <label for="nombreusuario">Usuario</label>
      <input type="text" class="infos" name="nombreusuario" id="nombreusuario">
      <label for="contrasena">Contraseña</label>
      <input type="password" class="infos" name="contrasena" id="contrasena">
      <?php
          if (isset($data) && isset($data['global']))
          echo "<div class='alert alert-danger'>"
                  .$data['global'].
                  "</div>";
            ?>
      <input type="submit" value="Iniciar Sesion" name="insertar">
</form>
<style>
form {
  background-color: purple;
  border-radius: 10px;
  padding: 20px;
  width: 300px;
  margin: 50px auto;
}
label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: white;
}
.infos[type="text"], input[type="password"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
}
button {
  background-color: purple;
  color: white;
  font-size: 18px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}
button:hover {
  background-color: red;
}
</style>