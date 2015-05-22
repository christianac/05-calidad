 @include('nav')


    

    <section class="portfolio">
       <div class="container">
       		<div class="row">
       			<div class="span9">
                             				<table class="table">
                          <thead>
                              <tr>
                                  <th>Producto</th>
                                  <th>Cantidad</th>
                                  <th>Precio</th>
                                  <th>Subtotal</th>
                                  <th>Eliminar</th>
                              </tr>
                          </thead>

                          <tbody>

                          <?php $cart = Cart::content();
                          $total = 0; ?>
                          <?php foreach($cart as $row) :?>

                              <tr>
                                  <td>
                                      <p><strong><?php echo $row->name;?></strong></p>
                                      <p><?php echo ($row->options->has('size') ? $row->options->size : '');?></p>
                                  </td>
                                  <td><input type="text" value="<?php echo $row->qty;?>"></td>
                                  <td><a href="<?=URL::to('carrito/d/'.$row->rowid.''); ?>">Eliminar</a></td>
                                  <td>$<?php echo $row->price;?></td>
                                  <td>$<?php echo $row->subtotal;?></td>

                             </tr>


                          <?php 
                          $total = $row->subtotal+$total;
                          endforeach;?>
                            <tr><td></td>
                             <td></td>
                           <td>Subtotal</td>                           
                           <td><?php echo $total ?></td></tr>

                           <tr><td></td>
                             <td></td>
                           <td>IGV</td>                           
                           <td><?php echo $vIgv = ($total*18)/100; ?></td></tr>

                           <tr><td></td>
                             <td></td>
                           <td>Total a pagar:</td>                           
                           <td><?php echo $total + $vIgv; ?></td></tr>

                          </tbody>
                        </table>
       			</div>
       		</div>
       </div>
    </section>

   

    <!-- jQuery -->
    <script src="<?=URL::to('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL::to('js/bootstrap.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
