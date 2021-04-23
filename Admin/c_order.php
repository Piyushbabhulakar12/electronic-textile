<?php

include '../conn.php';

$id = $_GET['id'];

$sql = " update u_order set action = 'Confirm' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	
     $id = $_GET['id'];

     $aka = " select * from u_order where id = '$id' ";

     $raia = mysqli_query($conn,$aka);
      
     $pro = mysqli_fetch_array($raia);

     $u_name = $pro['u_name'];
     $u_email = $pro['u_email'];
     $u_phone = $pro['u_phone'];
     $u_add = $pro['u_add'];
     $u_city = $pro['u_city'];
     $u_pin = $pro['u_pin'];
     $u_state = $pro['u_state'];
     $u_id = $pro['u_id'];
     $p_price = $pro['p_price'];
     $p_qty = $pro['p_qty'];
     $p_id = $pro['p_id'];
     $price = $pro['price'];
     $diliver_ch = $pro['diliver_ch'];
     $total = $pro['total'];
     $date = $pro['date'];
     $order_id = $pro['order_id'];
     $action = $pro['action'];
     $payment = $pro['payment'];

     $sqaa = " insert into a_hit (u_name,u_email,u_phone,u_add,u_city,u_pin,u_state,u_id,p_price,p_qty,p_id,price,diliver_ch,total,date,order_id,action,payment) values ('$u_name','$u_email','$u_phone','$u_add','$u_city','$u_pin','$u_state','$u_id','$p_price','$p_qty','$p_id','$price','$diliver_ch','$total','$date','$order_id','$action','$payment') ";

     if (mysqli_query($conn,$sqaa)) 
     {
         header("location:m_order.php");
     }
     else
     {
          echo "Not Done";
     }


}
else
{
	echo "Not Done";
}

?>