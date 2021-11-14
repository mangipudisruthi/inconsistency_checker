<?php $ui = new UI();?>

<div style="text-align:center;">
<h3 style="font-weight:bold">Duplicate Course Registrations</h3>
</div>

<?php
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
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Wrong Id</th>
            <th>Correct Id</th>
            <th>Semester</th>
        </tr>
    </thead>

    <?php
       $i=0;
       $total =count($traffic3);
	?> 
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic3[$i][admn_no] ?></td>
            <td><?= $traffic3[$i][course] ?></td>
            <td><?= $traffic3[$i][subject_name] ?></td>
            <td><?= $traffic3[$i][subject_code] ?></td>
            <td><?= $traffic3[$i][wrong_id] ?></td>
            <td><?= $traffic3[$i][correct_id] ?></td>
            <td><?= $traffic3[$i][semester] ?></td>
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



