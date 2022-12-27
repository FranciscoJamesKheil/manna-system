<?php  
include '../../connections/connect.php';
 $prod_id = (string)$_POST['prod_id'];


$sql  = "SELECT * from production_log
LEFT JOIN product on production_log.prod_id = product.prod_id
WHERE production_log.prod_id='$prod_id' ORDER BY log_id DESC"; 
$output='';


 $result = mysqli_query($con, $sql);  
 $output .= '  
            <table id="s_record_table"class="table">
            <thead class="table-dark" style="font-size:12px">
                <tr>
                    <th>Production Code</th>
                    <th>Name</th>
                    <th>Qty Added</th>
                    <th>Remaining Quantity</th>
                    <th>Production Date</th>
                    <th>Expiration Date</th>
                    <th>Cost</th>
                    <th>Price</th>
                </tr>
            </thead>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($arr = mysqli_fetch_array($result))  
      {  

          $color='';
          if ($arr['status'] == 'EMPTY'){
               $color = 'danger';
          }
          else if ($arr['status'] == 'LOW'){
               $color = 'warning';
          }
          else if ($arr['status'] =='ACTIVE'){
               $color = 'success';
          }
           $output .= '  
                <tr>  
                <td>'.$arr['production_code'].'</td>
                <td>'.$arr['name'].'</td>
                <td>'.$arr['qty_added'].'</td>
                <td></td>
                <td>'.$arr['prod_date'].'</td>
                <td>'.$arr['exp_date'].'</td>
             <td scope="row" >₱ '.number_format($arr["cost"],2).'</td>
             <td scope="row" >₱ '.number_format($arr["price"],2).'</td>
                <td><span class="badge bg-'.$color.'">'.$arr["status"].'</span></td>
                </tr>  
           ';  
      } 
      
}
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Nothings in the cart</td>  
                     </tr>';  
 }  
 $output .= '

 </table>  


      </div>';  
 echo $output;  
 ?>