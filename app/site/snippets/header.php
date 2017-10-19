<!DOCTYPE html>
<html lang="<?php echo $site->language()->code() ?>">

<head>
    <!-- set charset and viewport -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- favicon -->
    

    <?php if($site->favicon()->isNotEmpty()){ ?>
    <link rel="icon" href="<?php echo $site->file($site->favicon())->url(); ?>">
    
    <?php } ?>


    <!-- site title -->
    <title>
        <?php echo $site->title(); ?> –
        <?php echo $page->title(); ?>
    </title>
    <meta property="og:title" content="<?php echo $site->title(); ?> – <?php echo $page->title(); ?>" />
    <!-- meta tags -->
    <?php if($site->description()->isNotEmpty()): ?>
    <meta name="description" content="">
    <meta property="og:description" content="">
    <?php endif; ?>
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta property="og:image" content="" />
    <?php snippet('head-async') ?>
</head>

<body>

