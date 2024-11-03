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
      <header>Request Quotation Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>NICNo</label>
          <input type="text" placeholder="Enter NIC Number" name="t1" required />
        </div>
		<div class="input-box">
          <label> Name for Quotation</label>
          <input type="text" placeholder="Enter  name" name="t2" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="t3" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="t4" required />
          </div>
        </div>
        <div class="input-box address">
          <label>No of Quotations want</label>
          <input type="text" placeholder="Enter your address" name="t5" required />
        </div>

        <input type="submit" name="s1" value="Request">
      </form>
    </section>

  </body>
</html>