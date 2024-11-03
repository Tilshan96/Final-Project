<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Pathirana Printers</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="regstyle.css" />
  </head>
  <body>
    <section class="container">
      <header>Order Details</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>NICNo</label>
          <input type="text" placeholder="Enter NIC Number" name="t1" required />
        </div> <input type="submit" name="s1" value="Search">
		<div class="input-box">
          <label> Name</label>
          <input type="text"  name="t2">
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number"  name="t3" >
          </div>
        </div>
		<div class="input-box">
          <label>Service that want</label>
          <input type="text"  name="t4" >
        </div>
		<div class="input-box">
          <label>Due order date</label>
          <input type="text" name="t5" required />
        </div>
		<div class="input-box">
          <label>Order Confirmation</label>
          <input type="text"  name="t5" >
        </div>
		
		<div class="input-box">
          <label>Order Status</label>
          <input type="text" name="t6" >
        </div>
        
      </form>
    </section>

  </body>
</html>