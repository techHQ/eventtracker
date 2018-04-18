<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Events;

?>
<h1 >Event Tracker</h1>

<p>
    Create an event <code><?= __FILE__; ?></code>.
</p>

<a href="create" class="btn btn-primary">Create Event</a>
 <br><br><br>
<table class="table table-responsive table-stripped">
 <tr class="info">
 <th>Id</th>
 <th>Name</th>
 <th>description</th>
 <th> Venue </th>
 <th>date</th>
 <th>From</th>
 <th>To</th>
 <th>Action</th>
 </tr>
 <?php foreach($event as $event){ ?>
    <tr>
 <td>   <?= $event->id ?> 			</td>
 <td>   <?=  $event->name ?>   	    </td>
 <td>   <?=  $event->description ?> </td>
 <td>	<?=  $event->Venue ?>		</td>
 <td>   <?=  $event->date ?>    	</td>
 <td>   <?=  $event->event_begin ?> </td>
 <td>   <?=  $event->event_end ?>   </td>
 <td>   
  	<div class="dropdown">
  		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  		<span class="caret"></span></button>
  		<ul class="dropdown-menu">
  	    	<li>
  	    		<a href="update?id=<?php echo $event->id ;?>">Edit</a>
  	    	</li>
    		<li>
    			<a href="delete?id=<?php echo $event->id ;?>">Delete</a>
    		</li>
  		</ul>
	</div>  
</td>
</tr>
<?php } ?>
</table>