<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

<?php perch_layout('global/header'); ?>

<?php perch_content('Page Header'); ?>

<section>
    <div class="l-container l-container--small">
        <?php perch_content('Content'); ?>
    </div>
</section>


<?php perch_layout('global/footer'); ?>