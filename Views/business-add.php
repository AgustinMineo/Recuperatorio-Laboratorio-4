<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Negocio</h2>
               <form class="bg-light-alpha p-5" method="post" action="<?php echo FRONT_ROOT ?>Business/Add">
                    <div class="row">                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Categoría</label>
                                   <input type="text" value="" name="category" class="form-control" Required>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" value="" name="name" class="form-control" Required>
                              </div>
                         </div>                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" value="" name="email" class="form-control" Required>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Dirección</label>
                                   <input type="text" value="" name="adress" class="form-control" Required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>