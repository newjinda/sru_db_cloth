<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?php

error_reporting(~E_NOTICE);
ini_set('display_errors','Off');
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

if ($_GET["q"] != '') {?>

<script type="text/javascript">
            $(document).ready(function() {

                var form = document.createElement('FORM');
                form.method='POST';
                form.action = 'views.php';

                var input1 = document.createElement("INPUT");
                input1.type="hidden";
                input1.name="id";
                input1.value="<?php echo $_GET["q"] ?>";

                form.appendChild(input1);
               

                document.body.appendChild(form);

                form.submit();
            });
        </script>
    
<?php }else{
    echo "<script>window.location.href='index.php'</script>";
}