<?php $ui = new UI();?>

<div style="text-align:center;">
<h3 style="font-weight:bold">Duplicate Course Registrations</h3>
</div>
<!-- $bodyrow=$ui->row()->width(6)->m_width(6)->t_width(6)->open(); -->
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
    ?>

    <div class="button-css">
    
        <?php

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
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Count</th>
        </tr>
    </thead>

    <?php
       $i=0;
       $total =count($traffic2);
	?> 
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic2[$i][admn_no] ?></td>
            <td><?= $traffic2[$i][course] ?></td>
            <td><?= $traffic2[$i][branch] ?></td>
            <td><?= $traffic2[$i][subject_code] ?></td>
            <td><?= $traffic2[$i][subject_name] ?></td>
            <td><?= $traffic2[$i][c2] ?></td>
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



