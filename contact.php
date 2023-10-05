<?php
    include 'header.php';

    if(isset($_POST['send'])){
        include('conn.php');

        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $created_at=date("Y-m-d h:i:s");

        $sql = "INSERT INTO contact (first_name, last_name, email, message, created_at)
        VALUES ('$first_name', '$last_name', '$email', '$message', '$created_at')";

        $conn->query($sql);

        // $to = "gihoyaj184@jobbrett.com";
        // $subject = "Mail From website";
        // $txt ="Name = ". $first_name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
        // $headers = "From: noreply@deka-sales.com" . "\r\n" .
        // "CC: somebodyelse@example.com";
        // if($email!=NULL){
        //     mail($to,$subject,$txt,$headers);
        // }
        // //redirect
        header("contact.php");

  }

?>

<main>

    <section class="contact-image">
        <div class="contact-image-content">
            <div class="contact-text">
                <h1 class="animate">Get In Touch</h1>
                <p class="animate">Let's communicate. You can contact us using the information given.</p>
            </div>
        </div>
    </section>

    <section class="contact-container">
        <div class="title">
            <p>Any questions? Fill out the form below.</p>
        </div>

        <form action="" method = "POST">

            <input type="hidden" name="id">

            <div class="contact-input">
                <label for="">First Name</label>
                <input type="text" name="first_name" required>
            </div>

            <div class="contact-input">
                <label for="">Last Name</label>
                <input type="text" name="last_name" required>
            </div>

            <div class="contact-input">
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="contact-input">
                <label for="">Messages</label>
                <textarea name="message" required></textarea>
            </div>

            <input type="hidden" name="created_at">

            <input type="submit" name="send">

        </form>

  </section>

</main>

<?php
  include 'footer.php';
?>