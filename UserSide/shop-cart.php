<?php
include "header.php";
?>

<form action="shop-cart.php" method="POST">
  <div class="py-5 bg-light-v2">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6">
         <h2>Shop</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li> 
          <li class="breadcrumb-item">
            <a href="#"> Shop</a>
          </li>
          <li class="breadcrumb-item">
            Cart
          </li>
        </ol>
      </div>
    </div>
  </div> 
</div>



<section class="padding-y-150">
  <div class="container">
   <div class="row">

     <div class="col-12">
       <div class="table-responsive">
         <div class="table-responsive">  
           <table class="table table-bordered">  
            <tr>  
             <th width="40%">Item Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
           </tr>  
           <?php   
           if(!empty($_SESSION["shopping_cart"]))  
           {  
             $total = 0;  
             foreach($_SESSION["shopping_cart"] as $keys => $values)  
             {  
              ?>  
              <tr>  
               <td><?php echo $values["item_name"]; ?></td>  
               <td>
                <?php echo $values["item_quantity"]; ?></td>  
                <td>₹ <?php echo $values["item_price"]; ?></td>  
                <td>₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                <td><a href="shop-cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
              </tr>  
              <?php  
              $total = $total + ($values["item_quantity"] * $values["item_price"]);  
            }  
            ?>  
            <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">₹<?php echo number_format($total, 2); ?></td>  
             <td></td>  
           </tr>  
           <?php  
           if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  

                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="shop-cart.php"</script>';  
                }  
           }  
      }  
 }  
         }  
         ?>  
       </table>  
     </div>  
      
            </form>
          </td>
          <td colspan="3">
          <!--   Total: <span class="font-weight-semiBold font-size-18">₹500.00</span>
          </td> -->
        </tr>
      </tbody>
    </table>
  </div>
</div> <!-- END col-12 -->
</form>

<div class="col-md-6 mt-4">
 <a href="book.php" class="btn btn-outline-light btn-icon"> <i class="ti-angle-double-left mr-2"></i> Back to shopping</a>
</div> <!-- END col-md-6 -->
<div class="col-md-6 mt-4 text-right">
  <!--  <button href="shop.html" class="btn btn-outline-light">Update cart</button> -->
  <button href="shop.html" class="btn btn-primary ml-3">Checkout</button>
</div> <!-- END col-md-6 -->
</div> <!-- END row-->  
</div> <!-- END container-->
</section>





<?php include "footer.php" ?>