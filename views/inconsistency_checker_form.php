<?php $ui = new UI();?>
<body style="overflow:hidden;" class="skin-blue">
    <div align="center" >  
        <?php
            $formBox = $ui->box()->title(" Inconsistency checker")->containerClasses("form-box")->open();

            $bodyrow=$ui->row()->width(14)->open();
            if($err_code==1) {
			   $ui->callout()
			   ->uiType("error")
			   ->desc("Please enter the valid details")
			   ->show();
			}	
            $form = $ui->form()
                ->multipart()
                ->action('inconsistency_checker/index')
                ->open();

            $ui->select()
                ->name('session_year')
                ->label('Session year')
                ->width(12)
                ->options(array(
                        $ui->option()->value('NULL')->text('---SELECT SESSION YEAR---'),
                        $ui->option()->value('2016-2017')->text('2016-2017'),
                        $ui->option()->value('2017-2018')->text('2017-2018'),
                        $ui->option()->value('2018-2019')->text('2018-2019'),
                        $ui->option()->value('2019-2020')->text('2019-2020'),
                        $ui->option()->value('2020-2021')->text('2020-2021'),
                        $ui->option()->value('2021-2022')->text('2021-2022'),
                        ))
                ->required()
                ->show();

            $ui->select()
                ->name('session')
                ->label('Session')
                ->width(12)
                ->options(array(
                    $ui->option()->value('NULL')->text('---SELECT SESSION TYPE---'),
                    $ui->option()->value('Monsoon')->text('Monsoon')->selected($type_id=='Monsoon'),
                    $ui->option()->value('Winter')->text('Winter')->selected($type_id=='Winter'),
                    $ui->option()->value('Summer')->text('Summer')->selected($type_id=='Summer')
                    ))
                ->required()
                ->show();

            $ui->select()
                ->name('inconsistency_type')
                ->label('Type of inconsistency')
                ->width(12)
                ->options(array(
                    $ui->option()->value('NULL')->text('---SELECT INCONSISTENCY TYPE---'),
                    $ui->option()->value('duplicate_sem_registrations')->text('Duplicate semester registrations')->selected($type_id=='duplicate_sem_registrations'),
                    $ui->option()->value('duplicate_course_registrations')->text('Duplicate course registrations')->selected($type_id=='duplicate_course_registrations'),
                    $ui->option()->value('wrong_course_mappings')->text('Wrong course mappings')->selected($type_id=='wrong_course_mappings'),
                    $ui->option()->value('pending_result_declarations')->text('Pending result declarations')->selected($type_id=='pending_result_declarations')
                ))
                ->required()
                ->show();

            $bodyrow->close();

            $ui->button()
                ->value('Submit')
                ->uiType('primary')
                ->submit()
                ->name('submit')
                ->icon($ui->icon('check'))
                ->show();

            $form->close();

        $formBox->close();

    ?>
    </div>
</body>

    