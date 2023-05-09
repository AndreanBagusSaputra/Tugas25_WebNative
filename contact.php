<div class="contact">
  <h2>Contact Us</h2>
  <form action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject">
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea>
    <input type="submit" value="Send">
  </form>
</div>

<style>
    .contact {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 10px;
  text-align: center;
}

.contact h2 {
  margin-bottom: 20px;
  font-size: 24px;
}

.contact form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.contact label {
  display: block;
  margin-bottom: 10px;
  font-size: 16px;
  font-weight: bold;
}

.contact input[type="text"],
.contact input[type="email"],
.contact textarea {
  width: 100%;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  font-size: 16px;
}

.contact textarea {
  height: 150px;
}

.contact input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.contact input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>


<?php
    include_once 'bottom.php';
?>