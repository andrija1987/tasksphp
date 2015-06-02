<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->_tpl_vars['Title']; ?>
</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="components/css/main.css" />
    <link rel="stylesheet" type="text/css" href="components/css/user.css" />

    <script src="components/js/jquery/jquery.min.js"></script>
    <script src="components/js/bootstrap/bootstrap.js"></script>

    <script type="text/javascript" src="components/js/require-config.js"></script>
    <script type="text/javascript" src="components/js/require.js"></script>
    <script type="text/javascript" src="components/js/user.js"></script>
</head>
<body>

<div class="navbar" id="navbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="pull-left"><?php echo $this->_tpl_vars['Page']->GetHeader(); ?>
</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span6 offset3">

            <?php echo $this->_tpl_vars['Renderer']->Render($this->_tpl_vars['LoginControl']); ?>


            <hr>
            <footer><p>
                <?php echo $this->_tpl_vars['Page']->GetFooter(); ?>

            </p></footer>
    </div>
</div>



</body>
</html>
