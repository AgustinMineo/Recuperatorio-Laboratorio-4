<main class="d-flex align-items-center justify-content-center height-100" >
     <div class="content">
          <header class="text-center">
               <h2>Recuperatorio</h2>
          </header>

          <form action="<?php echo FRONT_ROOT?>User/Login" method="POST" class="login-form bg-dark-alpha p-5 bg-light">
               <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingresar usuario" name="email" required>
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" name="password" required>
               </div>
               <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>