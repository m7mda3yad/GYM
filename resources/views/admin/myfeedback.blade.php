@extends('aindex')
<br><br><br><br><br><br>
<div class="col-md-9"><div class="card"><div class="card-header"><h4> Feedback</h4></div>
<form action="member_profile" method="get">
    @csrf 
<table class="table table-striped"><thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Member id</th>
                  <th>Trainer id</th>
                  <th>Body</th>
                  <th>Delete</th>
                </tr></thead><tbody>
<?php
foreach ($m as $data){
 echo '<tr>';
 echo '<td>'.$data->id.'</td>';
 echo '<td>'.$data->member_id.'</td>';
 echo '<td>'.$data->trainer_id.'</td>';
echo '<td>'.$data->body.'</td>';
 echo '<input name="id" value="'.$data->id.'" type="hidden"><td class="danger"><a href="delete\\'.$data->id.'">delete</a></td>';
 echo '</tr>';}
?>
</tbody></table>
</form>

</div></div>
