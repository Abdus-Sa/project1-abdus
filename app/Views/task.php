<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php echo $task['name']; ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php echo $this->endSection(); ?>