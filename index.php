<?php get_header(); ?>


<div class="content">



 <div class="content-border-l">
  </div>

<div class="middle">

 <div class="about-section">

  <div id="about" class="about-body">
    <div class="left-2col">
      <p>Student, learner, knowledge expander, seeking to grow knowledge of web application development for the          expansion of personal knowledge and marketable skills.</p>
      <br>
      <hr class="line">
      <br>
      <p>Librarian, Information Professional, Web Designer</p>
    </div>
      <div class="right-2col">
      <img src="http://res.cloudinary.com/dp8syui83/image/upload/v1519090209/Screen_Shot_2018-02-19_at_8.04.29_PM_xnispk.png">
      </div>
    </div>

  </div>

<div id="portfolio" class="portfolio-body">
  <!---<div class="content-border-l2">
  </div>--->



  <div id="pieces" class="pieces">

     <h2 style="text-align: center;">Portfolio</h2>

    <hr class="line">

    <ul class="grid">

      <li><img src="http://res.cloudinary.com/dp8syui83/image/upload/v1519090209/Screen_Shot_2018-02-19_at_8.04.29_PM_xnispk.png" alt="placeholder"></li>
      <li><img src="http://res.cloudinary.com/dp8syui83/image/upload/v1519090209/Screen_Shot_2018-02-19_at_8.04.29_PM_xnispk.png" alt="placeholder"></li>
      <li><img src="http://res.cloudinary.com/dp8syui83/image/upload/v1519090209/Screen_Shot_2018-02-19_at_8.04.29_PM_xnispk.png" alt="placeholder"></li>
      <li><img src="http://res.cloudinary.com/dp8syui83/image/upload/v1519090209/Screen_Shot_2018-02-19_at_8.04.29_PM_xnispk.png" alt="placeholder"></li>

    </ul>

  </div>

   <!---<div class="content-border-r2">
   </div>--->

</div>

<div id="contact" class="contact-body">

  <!---<div class="content-border-l3">
  </div>--->

  <div id="contact-form" class="contact-form">

  <h2 style="text-align: center; width: 100%;">Contact Me</h2>
  <hr class="line">

  <form id="contact-me" class="contact-me" action="action_page.php" method="post">

    <label for="name">Name</label>
    <input type="text" id="name-input" name="name" placeholder="Your Name" required="required">

    <label for="email" note="*/ Change To Email At Some Point/*">Email</label>
    <input type="text" id="email-input" name="email" placeholder="Your Email" required="required">

    <label for="phone">Phone Number</label>
    <input type="text" id="phone-input" name="phone" placeholder="555-555-5555">

    <label for="reason">Reason For Contact</label>
    <span class="no-radius">
    <select id="reason" class="reason">
      <option value="info">To get more information about me and my work</option>
      <option value="job">Contact about about a job you think I would help you with</option>
      <option value="question">To ask me a question about anything, I mean anything</option>
      <option value="response">To see if I want to chat</option>
      <option value="noreason">No reason in particular</option>
      <option value="other">To contact me about something completely random</option>
    </select>
    </span>

    <label for="message">Message</label>
    <textarea type="text" id="message" name="message" placeholder="Here is were you type anything you want to say to me"></textarea>

    <input type="submit"></input>

    </form>

  </div>

  <!---<div class="content-border-r3">
    </div>--->

</div>

</div>

<div class="content-border-r">
   </div>

</div>


<?php get_footer(); ?>