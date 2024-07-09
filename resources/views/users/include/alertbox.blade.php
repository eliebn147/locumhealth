  <style>
.alert_danger {
  padding: 12px;
  background-color: #f44336;
  color: white;
  border-radius:6px;
  margin-top:10px;
  box-shadow: 0 15px 5px -8px rgb(0 0 0 / 40%);
  max-width:500px;
}

.alert_succes {
  padding: 12px;
  background-color: #4680ff;
  color: white;
  border-radius:6px;
  margin-top:10px;
  box-shadow: 0 15px 5px -8px rgb(0 0 0 / 40%);
   max-width:500px;
}




.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>
<center>
			 @if(Session::get('Error_message') !=null)
             <div class="alert_danger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Sorry!</strong> {{ Session::get('Error_message')}}.
</div>
@endif
@if(Session::get('success_message') !=null)
             <div class="alert_succes">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Great!</strong> {{ Session::get('success_message')}}.
</div>
@endif
<br>
</center>