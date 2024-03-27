<?php include 'header.php'; ?>
<div class="intro">
    <h1>Welcome to my Guestbook</h1>
</div>
    <div class="intro">
    <h2>Please write me a little note below</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
       
    <textarea cols="40" rows="5" name="note" wrap="virtual"></textarea>
      <br/>
      <br/>
    <input type="submit" class="btn btn-primary"value="Send it">
   
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if 'note' field is set and not empty
        if(isset($_POST['note']) && !empty($_POST['note'])) {
            // Sanitize input to prevent XSS
            $note = htmlspecialchars($_POST['note']);
            
            // Open file for appending, or create it if it doesn't exist
            $fp = fopen("yourLogin.txt", "a");
            
            // Write note to file
            fwrite($fp, nl2br($note) . "<br>");
            
            // Close the file
            fclose($fp);
            
            echo "<p>Note added successfully!</p>";
        } else {
            echo "<p>Please enter a note before submitting.</p>";
        }
    }
    ?>

<div class="intro">
    <h2>The entries so far:</h2>
    <?php
    // Read and display entries from file
    $entries = @file_get_contents("yourLogin.txt");
    if ($entries !== false) {
        echo $entries;
    } else {
        echo "<p>No entries yet.</p>";
    }
    ?>
    </div>
    </div>
</body>
</html>
