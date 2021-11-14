<?php $ui = new UI();?>

<div style="text-align:center;">
<h3 style="font-weight:bold">Pending Result Declarations</h3>
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

    ?>
    <div id='printsummary'>
        <?php

    $table = $ui->table()->hover()->bordered()
                    ->sortable()->searchable()->paginated()
                    ->open();
		?>
    <thead>
        <tr>
            <th>Sl No.</th>
            <th>Admission No.</th>
            <th>Semester</th>
            <th>Course</th>
            <th>Branch</th>
        </tr>
    </thead>

    <?php
       $i=0;
       $total =count($traffic4);
	?> 
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic4[$i][admn_no] ?></td>
            <td><?= $traffic4[$i][semester] ?></td>
            <td><?= $traffic4[$i][course] ?></td>
            <td><?= $traffic4[$i][branch] ?></td>
        </tr>
    <?php } 
    $table->close();
		$box->close();
		$row->close();
    ?>

<input type="button" class="btn-primary"  style="display:block, align:center, margin:auto, position:absolute"
            onclick=window.print();
            return false; 
            value="Print">
</div>
