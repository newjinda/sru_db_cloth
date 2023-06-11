<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?php

error_reporting(~E_NOTICE);
ini_set('display_errors','Off');
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

if ($_POST["sud"] != '') {?>

<script type="text/javascript">
            $(document).ready(function() {

                var form = document.createElement('FORM');
                form.method='POST';
                form.action = 'map.php';

                var input1 = document.createElement("INPUT");
                input1.type="hidden";
                input1.name="category";
                input1.value="<?php echo $_POST["category"] ?>";

                var input2 = document.createElement("INPUT");
                input2.type="hidden";
                input2.name="province";
                input2.value="<?php echo $_POST["province"] ?>";

                form.appendChild(input1);
                form.appendChild(input2);

                document.body.appendChild(form);

                form.submit();
            });
        </script>
    
<?php }else{
    echo "<script>window.location.href='index.php'</script>";
}