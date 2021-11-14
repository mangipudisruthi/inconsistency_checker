<?php $ui = new UI();?>

<div style="text-align:center;">
<h3 style="font-weight:bold">Duplicate Semester Registrations</h3>
</div>

<?php

    $selected_session="Session : ".$session;
    $selected_session_year="Session year : ".$session_year;
    $row = $ui->row()->open();

    $inputrow = $ui->row()->width(14)->open();
    $ui->select()
			   ->label('Session')
			   ->width(2)
			   ->options(array(
				       $ui->option()->text($session),
					   ))
	           ->required()
			   ->show();

    $ui->select()
			   ->label('Session Year')
			   ->width(2)
			   ->options(array(
				       $ui->option()->text($session_year),
					   ))
	           ->required()
			   ->show();
    $inputrow->close();
    $box = $ui->box()
          ->solid()
          ->uiType('primary')
          ->open();

    $table = $ui->table()->hover()->bordered()
                    ->sortable()->searchable()->paginated()
                    ->open();
		?>
    <thead>
        <tr>
            <th>Sl No.</th>
            <th>Admission No.</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Count</th>
        </tr>
    </thead>

    <?php
       $i=0;
       $total =count($traffic1);
	?> 
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic1[$i][admn_no] ?></td>
            <td><?= $traffic1[$i][course_id] ?></td>
            <td><?= $traffic1[$i][branch_id] ?></td>
            <td><?= $traffic1[$i][semester] ?></td>
            <td><?= $traffic1[$i][c1] ?></td>
        </tr>
    <?php } 
    $table->close();
		$box->close();
		$row->close();
    ?>

    <div>
    <input type="button" class="btn-primary"  style="display:block, align:center, margin:auto, position:absolute"
            onclick=window.print();
            return false; 
            value="Print">
     </div>



