<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
   background-image: url("images/pexal3.jpg");
   background-size: cover;
}
.container{
    background: transparent; /* Semi-transparent */
    backdrop-filter: blur(4px); /* Blur effect */
    width:350px;
    padding:15px;
    margin:55px auto;
    margin-top: 90px;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}


form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:10px;
    border-bottom:1px solid white;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding-top:13px;
    position:relative;
    margin-bottom: 0px;
}

.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid white;
}
input::placeholder{
    color:transparent;
}
label{
    color:black;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:black;
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:14px;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:none;
    color: #58D68D;
    ;
}
.recover a:hover{
    color:white;
    text-decoration:underline;
}
.btn{
    font-size:14px;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background-image: linear-gradient(to right,#2fbe3d,#58D68D);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background: white;
    color: black;
}
.or{
    font-size:1.1rem;
    margin-top:0.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:#58D68D;
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background: white;
    color: black;
    font-size:1.6rem;
    border:2px solid black;
    
}
.links{
    display:flex;
    justify-content:space-around;
    padding: 10px 20px;
    margin-top:0.9rem;
    font-weight:bold;
    font-size: 14px;
}
button{
   color:#58D68D;
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:white;
  
}
         
    .container{
    background: transparent; /* Semi-transparent */
    backdrop-filter: blur(4px); /* Blur effect */
    width:350px;
    padding:15px;
    margin:55px auto;
    margin-top: 90px;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
    }


    .select-city option{
    color: black;
    background: white;
    }

    .select-city{
        color:black;
    }


</style>
</head>
<body >
<div class="container" id="book-Ticket" style="padding-bottom:30px; ">
      <h1 class="form-title">Book Package</h1>
      <form method="post" action="ticket.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fullName" id="fullName" placeholder="First Name" required>
           <label for="fullName">Full Name</label>
        </div>
        <div class="input-group" style="margin-bottom: 0px;">
            <i class="fas fa-user"></i>
            <input type="text" name="phoneNo" id="phoneNo" placeholder="Last Name" required>
            <label for="phoneNo">Phone Number</label>
        </div>
        <div class="input-group" style="margin-bottom: 7px;">
            <i class="fas fa-map"></i>
            <select class="select-city" name="destination" id="destination" style="color:black;display:inline; margin-left: 30px; padding: 0px; padding-top:5px; padding-bottom:5px; width: 80%;  border-radius: 5px; border: 1px solid black;
             background-color: transparent;  color: white; font-size: 15px;" required>
                <option value="Select destination">Select destination</option>
                <option value="Goa">Goa</option>
                <option value="Munnar">Munnar</option>
                <option value="Agra">Agra</option>
                <option value="Kashmir">Kashmir</option>
                <option value="Ooty">Ooty</option>
                <option value="Goa">Goa</option>
                <option value="Bangalore">Bangalore</option>
            </select>
           
        </div>

        <div class="input-group" style="margin-bottom: 7px;">
            <i class="fa-solid fa-money-bill"></i>
            <select class="select-city" name="price"  id="price" style="color:black;display:inline; margin-left: 30px; padding: 0px; padding-top:5px; padding-bottom:5px; width: 80%;  border-radius: 5px; border: 1px solid white;
             background-color: transparent;  color: white; font-size: 15px;" required>
                <option value="Select price">Select price</option>
                <option value="5999">5999</option>
                <option value="9999">9999</option>
                <option value="14999">14999</option>
            </select>
           
        </div>

       
        <div class="input-group" style="margin-bottom: 15px;">
            <i class="fas fa-calendar"></i>
            <input type="date" name="calendar" id="calendar" placeholder="date" style="" required>
            <label for="calendar"></label>
        </div>
         
          <div class="input-group" style="margin-bottom: 0px;">
            <i class="fas fa-user"></i>
            <input type="text" name="noPerson" id="noPerson" placeholder="Number of persons" required>
            <label for="noPerson">Number of persons</label>
        </div>

       <input type="submit" class="btn" value="Book Ticket" name="bookTicket">
      </form>
    
      
      
    </div>
    <!-- script.js  -->
    <script src="script.js"></script>
</body>
</html>