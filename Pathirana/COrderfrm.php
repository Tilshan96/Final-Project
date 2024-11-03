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
      <header>Make Your Order</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>NICNo</label>
          <input type="text" placeholder="Enter NIC Number" name="t1" required />
        </div>
		<div class="input-box">
          <label> Name</label>
          <input type="text" placeholder="Enter  name" name="t2" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="t3" required />
          </div>
        </div>
		<div class="input-box">
          <label>Service that want</label>
          <input type="text" placeholder="What is the service you want (Banner , leaflets, etc)" name="t4" required />
        </div>
		<div class="input-box">
          <label>Attachments </label>
          <input type="submit" name="s1" value="Attach">
        </div>
		
		<div class="input-box">
          <label>Due order date</label>
          <input type="text" name="t5" required />
        </div><br>
        <input type="submit" name="s2" value="Make Order">
      </form>
    </section>

  </body>
</html>