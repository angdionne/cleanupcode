<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

    <style type='text/css'>
        body
        {
            font-family: Arial;
            font-size: 14px;
        }
        a {
            color: blue;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover
        {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<!-- Beginning header -->
<h3>Existing Records</h3>

<div> <h4> Navigation</h4><a href=''>Okay</a> |
    <a href=''>OkOk</a> |
</div>
<!-- End of header-->
<div style='height:20px;'></div>
<div>
    <?php echo $output; ?>

</div>
<!-- Beginning footer -->
<div><h3>Contact Us</h3></div>
<!-- End of Footer -->
</body>
</html>