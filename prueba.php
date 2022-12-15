<?php
    

    if(isset($_POST['nombre']))
    {
        $texto= $_POST['nombre'];
        echo $texto;
    }else{
        echo "no mi ciela";
    }
?>