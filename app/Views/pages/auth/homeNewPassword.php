<?= $this->extend('layout/authLayout') ?>

<?= $this->section('content') ?>
    <?= $this->include('layout/partials/authNewPassword') ?>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/RPW.js') ?>"></script>
<?= $this->endSection() ?>