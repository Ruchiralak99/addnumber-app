<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class ="container">
<form method="POST" action="{{ route('cal.add') }}">
    @csrf 
  <h2>Add Two Numbers</h2>
  <div class="form-group">
    <label >Number 1</label>
    <input type="text" class="form-control"  placeholder="Enter Num 1" name="num1">
  
  </div>
  <div class="form-group">
    <label >Number 2</label>
    <input type="text" class="form-control"  placeholder="Enter Num 2" name="num2">
  
  </div>
  <br/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

    
</body>
</html>