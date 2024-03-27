<?php include 'header.php'; ?>
<div class="intro">
  <form action="wk3ex1action.php" method="post">
    <div class="form-group">
        <label>Enter your name</label>
        <input type="text" name ="txtname" size="30"/><br/><br/>
        
</div>
<div class="form-group">
<label>Gender</label>
<input type="radio" name="radsex" value="male"/>Male
<input type="radio" name="radsex" value="female"/>Female
<input type="radio" name="radsex" value="other"/>Other
</div>

<div class="form-group">
<label>Occupation</label>
<select name="seloccupation">
    <option>Lecturer</option>
    <option>Beach Bum</option>
    <option>Traffic Warden</option>
</select>
</br>
</br>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Display">
</div>
</div>
</body>
</html>