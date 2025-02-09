<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(isset($_POST['Add_To_Cart']))
    {

        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('Item Already Added!');
                window.location.href=('index.php');
                </script>";
            }
            else
            {
              $count=count($_SESSION['cart']);
              $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
              echo"<script>
                alert('Item Added!');
                window.location.href=('index.php');
                </script>";
            }    
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
                alert('Item Added!');
                window.location.href=('index.php');
                </script>";
        }
    }

    if (isset($_POST['Remove_Item']))
    {
       foreach ($_SESSION['cart'] as $key => $value)
       {
        if($value['Item_Name']==$_POST['Item_Name'])
        {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo"<script>
          alert('Item Removed');
          window.location.href='cart.php';
          </script>";
        }
       }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach ($_SESSION['cart'] as $key => $value)
       {
        if($value['Item_Name']==$_POST['Item_Name'])
        {
          $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
          echo"<script>
          window.location.href='cart.php';
          </script>";
        }
       }
    }
}

?>