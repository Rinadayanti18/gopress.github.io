

     
     <?php $__env->startSection('container'); ?>
    
     <div class="container col-sm-12" style="position: static">
         
                 

                 
                     <h2 id="dangerous">Dangerous Goods</h2>
                     <img class="p-3" src="dangerousGoods/class1.gif" alt="">
                     <h5>Dangerous Goods Class 1</h5>
                    
                     <ul class="pagination mt-5">
                         <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                         <li class="page-item active"><a class="page-link" href="#">1</a></li>
                         <li class="page-item "><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item"><a class="page-link" href="#">Next</a></li>
                     </ul>

     </div>

     <?php $__env->stopSection(); ?>

    

 <!--
  <div>
    <div class="row">
                  <div class="col-sm-6">
                    <div class="fakeimg">Fakeimage</div>
                    <p>some text....</p>
                  </div>
                  <div class="col-sm-6">
                    <div class="fakeimg">Fakeimage</div>
                    <p>some text....</p>
                </div>
                </div>
  </div>
-->

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-laravel\resources\views/aboutUsFolder/dangerous.blade.php ENDPATH**/ ?>