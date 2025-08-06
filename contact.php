<?php
include_once("includes/header.php");
?>

<!-- Contact Section -->
 <div  class="has-text-centered has-text-black mt-2">
  <a href="index.php" class="has-text-black">Home</a> >> Contact
 </div>
<section class="section" style="margin-top:10rem;">
  <div class="container">
    <h1 class="title has-text-centered">📩 Contact Us</h1>

    <form action="contact_process.php" method="POST">
      <div class="field">
        <label class="label">Your Name</label>
        <div class="control">
          <input class="input" type="text" name="name" placeholder="John Doe" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Your Email</label>
        <div class="control">
          <input class="input" type="email" name="email" placeholder="you@example.com" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Message</label>
        <div class="control">
          <textarea class="textarea" name="message" placeholder="Type your message here..." required></textarea>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <button class="button is-tech is-info" type="submit">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</section>

<?php
include_once("includes/footer.php");
?>
