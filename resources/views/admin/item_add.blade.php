<html> 
<head><title>Add Items</title>
<link rel="stylesheet" href="css/form-basic.css">
<link rel="stylesheet" href="css/demo.css">
</head> 
<body> 
<form action="/create" method="post" class="form-basic"> 
            <div class="form-title-row">
                <h1>Insert new Item</h1>
            </div>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
<div class="form-row">
                <label>
                    <span>Item_Name</span>
                    <input type='text' name='item_name' />
                </label>
 </div> 
 <div class="form-row">
                <label>
                    <span>Item_Price</span>
                    <input type='text' name='item_price' />
                </label>
 </div>  
 <div class="form-row">
                <label>
                    <span>Item_Ingredients</span>
                    <textarea name='item_ingredients'></textarea>
                </label>
 </div>
 
 <div class="form-row">
                <label>
                    <span>Item_Description</span>
                    <textarea name='item_description' ></textarea>
                </label>
 </div>
 <div class="form-row">
                <label>
                    <span>Availability</span>
                    <input type='text' name='availability' />
                </label>
 </div>
 
  <div class="form-row">
                <button type="submit">Insert Item</button>
  </div>
</form> 
  <ul>
        <li> <a href='/view-orders'>View Orders</a></li>
        <li> <a href='/view-items'>View Items</a></li>
        <li><a href='/edit-items'>Update Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
  </ul>
</body>  
</html> 