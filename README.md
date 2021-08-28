PROJECT TITLE:  BUS TICKET RESERVATION SYSTEM

FLOW OF PROJECT:

STEP 1: First goto 'homepage.html'

STEP 2: 'main_logo.html', 'buttons.html', 'booking page.html' are the three frames in the homepage.

STEP 3:  The 'buttons.html' contains six buttons namely, 
       	Home,Login,Signup,Contact Us,About Us,Feedback
        
STEP 4: Click 'home' button

STEP 5: While clicking 'Home' button, 'booking page.html' will be opened. 
      	In the 'booking page.html' after clicking "search" button, 'bus.html' page gets opened.
        
STEP 6: After clicking "continue" button, 'hello.html' gets opened.

STEP 7: Now in this page after selecting the  number of seats and entering the passenger information, 
	      depending upon the number of seats booked, the repespective PHP page will opened.
	      The passenger details will be stored in the database named 'form2.sql'.


STEP 8: 
      If one seat is booked,'one.php' file will be opened.
      If two seat is booked,'two.php' file will be opened.
      If three seat is booked,'three.php' file will be opened.
      If four seat is booked,'four.php' file will be opened.


STEP 9: After the respective pages opened, click 'Proceed and pay' button in the those pages. 

STEP 10: Now,
          For one seat booked, the flow is:
          'redirect1.html' will be opened. Then 'payment_gateway1.html' will be opened. 
          Now the user can select 'credit_card1.html' or 'Debit card1.html' or 'netbank1.html' or 'upi1.html' for making payment.
          Under 'netbank1.html',  'bank_select1.html' will be opened and then 'otp1.html' will be opened.
          Then 'final_page_one.php' for ticket viewing will be opened.

          For two seat booked, the flow is:
          'redirect2.html' will be opened. Then 'payment_gateway2.html' will be opened. 
          Now the user can select 'credit_card2.html' or 'Debit card2.html' or 'netbank2.html' or 'upi2.html' for making payment.
          Under 'netbank2.html',  'bank_select2.html' will be opened and then 'otp2.html' will be opened.
          Then 'final_page_two.php' for ticket viewing will be opened.

          For three seat booked, the flow is:
          'redirect3.html' will be opened. Then 'payment_gateway3.html' will be opened. 
          Now the user can select 'credit_card3.html' or 'Debit card3.html' or 'netbank3.html' or 'upi3.html' for making payment.
          Under 'netbank3.html',  'bank_select3.html' will be opened and then 'otp3.html' will be opened.
          Then 'final_page_three.php' for ticket viewing will be opened.

          For four seat booked, the flow is:
          'redirect4.html' will be opened. Then 'payment_gateway4.html' will be opened. 
          Now the user can select 'credit_card4.html' or 'Debit card4.html' or 'netbank4.html' or 'upi4.html' for making payment.
          Under 'netbank4.html',  'bank_select4.html' will be opened and then 'otp4.html' will be opened.
          Then 'final_page_four.php' for ticket viewing will be opened.

Note:
After viewing the respective tickets,You can print the ticket or you can send mail for an confirmation.
For mail module please refer 'send.php'.

STEP 11: While clicking the Login button, 'login.html' will be opened. 
	Then we can give the username and password and click login button. Then it will open 'booking page.html'.
  
STEP 12:  While clicking the Sign Up button, ' sign.html' will be opened.
	        Then after entering the necesary details and clicking Submit button, it will redirect to 'val.php' page and store the details in a database named 'project.sql'.
          
STEP 13:  While clicking the Contact Us button, 'help.html' will be opened.  It contains the JAVASCRIPT file named 'help.jss'.

STEP 14:  While clicking the About Us button, 'about.html' will be opened. 

STEP 15: 'Feedback' button will open 'feedback.html'.

TIPS: This website is best viewed in 100% zoom in chrome.
