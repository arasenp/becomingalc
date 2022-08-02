<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="contactstyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=0.5"/>
    </head>
    <body>
        <div class="menu">
            <ul>
                <li><a  href="index.html">Home</a></li>
                <li><a href="html/journey.html">The Journey</a></li>
                <li><a  href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="form">

            <div class="box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14577.129492474496!2d57.56019326361973!3d-20.10324901900369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5522a5ca9c1f%3A0x3bdb9ec034be93fa!2sAfrican%20Leadership%20Campus!5e0!3m2!1sen!2smu!4v1656145091836!5m2!1sen!2smu" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br>
                <div class="deets">
                    <img src="email.png" alt="email">
                    <span><b>Email</b><br> aluexperience@gmail.com </span>
                </div>
                <div class="lining1"></div>
                <div class="deets">
                    <img src="phone.png" alt="phone">
                    <span><b>Phone</b><br>+230 5987 6543</span>
                </div>
                <div class="lining1"></div>
                <div class="deets">
                    <img src="address.png" alt="address">
                    <span><b>Address</b><br>Powder Mills Road, Pamplemousses</span>
                </div>
            </div>
            
            <div class="box">
                <h2 class="messagestatus">DROP A LINE</h2>
                <div class="lining2"></div>
                <form action="contact.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" placeholder="Your name..">
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" placeholder="Your last name..">
                
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Your email..">

                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" id="subject" placeholder="Your subject..">

                    <label for="message">Message</label>
                    <textarea id="body" row = "5" placeholder="Your message.."></textarea>
                
                    <input type="submit" onclick="sendEmail()" value="Submit">

                </form>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
          function sendEmail() {
            var fname = $("#fname");
            var lname = $("#lname");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(fname) && isNotEmpty(lname) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
              $.ajax({
                url:'contactmailer.php',
                method: 'POST',
                dataType: json,
                data:{
                  fname: fname.val(),
                  lname: lname.val(),
                  email: email.val(),
                  subject: subject.val(),
                  body: body.val()
                }, success: function(response){
                  $('box')[0].reset();
                  $('.messagestatus').text("LINE DROPPED 😄");
                }
              });
            }
          }
          function isNotEmpty(caller) {
            if(caller.val()==""){
              caller.css('border', '1px solid red');
              return false;
            }
            else{
              caller.css('border','');
              return true;
            }
          }
        </script>
    </body>
</html>