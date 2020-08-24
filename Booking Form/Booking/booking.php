<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="booking.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900">


   <script>
        function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            var resFacilities = document.getElementById("res_facilities").value;

            var total = (parseInt(roomType)*10) + ((roomNum)*2) + ((personNum)*3) + ((childNum)*2) + ((resFacilities)*5)

            document.getElementById("result").innerHTML = total;
        }
    </script>
</head>
<body>
    <form method="POST"  action="book.php">
        

	<div class="container">

		<div class="container-time">
			<h2 class="heading">Time Open</h2>
			<h3 class="heading-days">Monday-Friday</h3>
			<p>7am - 11am (Breakfast)</p>
			<p>11am - 10pm (Lunch/Dinner)</p>

			<h3 class="heading-days">Saturday and Sunday</h3>
			<p>9am - 1am (Breakfast)</p>
			<p>1am - 10pm (Lunch/Dinner)</p> 5

			<hr>

			<h4 class="heading-phone">  </h4>
         
         </div>

         <div class="container-form">
         	      <form action="#">
         	      	<h2 class="heading heading-yellow">Reservation Online</h2>

         	      	<div class="form-group">
                 <label class="txt">Room/Suite Type</label>
                 <select class="form-control" name="roomtype" id="room_type" onchange="finalCost()">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Standard </option>
                     <option value="2"> Deluxe </option>
                     <option value="3"> Superior Deluxe </option>
                     <option value="4"> Premier Deluxe  </option>
                     <option value="5"> Executive Suite </option>
                     <option value="6"> Junior Suite </option>
                     <option value="7"> Honeymoon Suite </option>
                 </select>
             </div>
         	      	<div class="form-group">
                 <label >Number of room/suite</label>
                 <select class="form-control" name="roomno" id="room_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
         	      	<div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" name="person" id="person_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
         	      	<div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" name="children" id="child_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
         	      	<div class="form-group">
                 <label>Restaurant facilities?</label>
                 <select class="form-control" name="facilities" id="res_facilities" onchange="finalCost()">
                     <option value="0" selected> Do you want restaurant facilities? </option>
                     <option value="2"> Yes </option>
                     <option value="0"> No </option>
                 </select>
             </div>

             <div class="form-group">
                 <label>Total Cost ($) : </label>
                 <span name="cost" id="result" style="background-color: black;color: gold;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
             </div>

         	      	
                    <button class="btn">Submit</button>

         	      </form>
         	 
         </div>

		

	</div>

</body>
</html>