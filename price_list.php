<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
  
<form action="price_save.php" method="post">

<label for="">Package Title</label>
<input type="text" name= "title"> </br>

<label for="">Package Price</label>
<input type="text" name= "Price"> </br>

<label for="">Package Plan</label>
<input type="text" name= "Plan"> </br>

<div class="field_wrapper">
    <label for="">Add Feature</label>
    <div>
        <input type="text" name="featurelist[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.jpg" width="15" heigth="15"/></a>
    </div>
</div>

<button type="submit">Save</button>

</form>


<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="featurelist[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.jpg" width="15" heigth="15" /></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
</body>
</html>