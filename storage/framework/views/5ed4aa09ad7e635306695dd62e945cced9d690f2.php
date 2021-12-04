<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Customizer Editor</title>

    <!-- Scripts -->
    <script>
        let _token = '<?php echo e(csrf_token()); ?>';

    </script>
    <?php if( env( 'ALTRP_SETTING_ADMIN_LOGO' ) ): ?>
    <script>
        window.admin_logo = <?php echo env('ALTRP_SETTING_ADMIN_LOGO'); ?>;

    </script>
    <?php endif; ?>
    <script>
        let _altrpVersion = '<?php echo e(getCurrentVersion()); ?>';

    </script>
    
    <script src="<?php echo e(altrp_asset( '/modules/customizer/customizer.js', 'http://localhost:3007/' )); ?>" crossorigin defer></script>

    <script>
      window.container_width = <?php echo e(get_altrp_setting('container_width', '1440')); ?>;

    </script>
    <link rel="stylesheet" href="<?php echo e(asset( '/modules/editor/editor.css?' ) . getCurrentVersion()); ?>">
    
</head>

<body>
    <div id="customizer-editor">

    </div>
<div id="portal-target"></div>
</body>

</html>
<?php /**PATH /var/www/vittim.live/resources/views/customizer.blade.php ENDPATH**/ ?>