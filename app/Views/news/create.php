
<?= \Config\Services::validation()->listErrors(); ?>

<form action="<?php echo base_url() ?>/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
