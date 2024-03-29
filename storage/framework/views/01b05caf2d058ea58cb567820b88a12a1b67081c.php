



<style>
    th {
        font-size: 11px;
    }
    td {
        font-size: 13px;
    }
    .btnAction {
        font-size: 8px;
    }
    .div-upload {
      position: relative;
      overflow: hidden;
    }
    .input-upload {
      position: absolute;
      font-size: 10px;
      opacity: 0;
      right: 0;
      top: 0;
    }
  </style>




<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('La liste des Utilisateurs')); ?>


     <a class="btn btn-success btn-sm float-right" href="<?php echo e(url('/Users/create')); ?>">Ajouter un nouveau Utilisateur</a>
         
    </div>
  <div class="card-body">
    <div class="table-container">
      <?php echo $__env->make('user.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/user/index.blade.php ENDPATH**/ ?>