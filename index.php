<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

<?php perch_layout('global/header', [
  'class' => 'home'
]); ?>

<?php perch_content('Intro'); ?>

<?php perch_layout('home/services'); ?>

<?php perch_layout('global/footer'); ?>