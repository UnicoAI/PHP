<?php include 'header.php'; ?>
<div class="intro">
  <form action="wk3ex2action.php" method="post">
    <div class="form-group">
        <label>Enter your age</label>
        <input type="text" name ="txtage" size="30"/><br/><br/>
        
</div>
<div class="form-group">
   
<label>Gender</label>
<input type="radio" name="radsex" value="male" />Male
<input type="radio" name="radsex" value="female"/>Female
<input type="radio" name="radsex" value="other"/>Other

</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit">
</div>
</div>
</body>
</html>

