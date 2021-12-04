<?php $__env->startSection('content'); ?>
  <script>
    let username = '<?php echo $currentUser->chat_username; ?>';
    if (username != undefined)
      window.localStorage.setItem('currentLogin', username);
  </script>

  <noscript>Sorry, requires JavaScript to be enabled.</noscript> <!-- TODO: Translate this? -->
  <section id="matrixchat" style="height: 100%; overflow: auto;" class="notranslate"></section>
  <script src="<?php echo e(Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/bundle.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('chat::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vittim.live/Modules/Chat/Resources/views/index.blade.php ENDPATH**/ ?>