<!DOCTYPE html>
<html>

<head>
    <title>My Layout</title>
</head>

<body>
    <?php echo $this->include('partials/navbar'); ?>
    <div class="content">
        <?php echo $this->renderSection('content'); ?>
    </div>
    <?php echo $this->include('partials/footer'); ?>
</body>

</html>