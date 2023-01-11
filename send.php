$num = $_GET['tonum'];
<a href="https://web.whatsapp.com/send/?phone=<?php echo $num; ?>&text=I am <?php echo $_GET['name']; ?>, 
My number <?php echo $_GET['number']; ?>, 
I want to book my tour at date: <?php echo $_GET['dot']; ?>, 
Time: <?php echo $_GET['ptime']; ?>, 
Persons: <?php echo $_GET['nop']; ?>, 
Want to visit <?php echo $_GET['destination']; ?>, 
If you could please pickup us Thanks" class="btn btn-warning btn-lg">Book my Tour</a>
  
