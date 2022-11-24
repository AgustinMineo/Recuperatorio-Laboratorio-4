<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Negocios</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>Categoría</th>
                         <th>Nombre</th>
                         <th>Email</th>
                         <th>Dirección</th>
                    </thead>
                    <tbody>    
                         <?php
                             foreach($businessList as $business){
                                 echo "<tr>";                             
                                  echo "<td>".$business->getCategory()."</td>";
                                  echo "<td>".$business->getName()."</td>";
                                  echo "<td>".$business->getEmail()."</td>";
                                  echo "<td>".$business->getAddress()."</td>";
                                  echo "</tr>";
                              }                
                         ?> 
                    </tbody>
               </table>
          </div>
     </section>     
</main>