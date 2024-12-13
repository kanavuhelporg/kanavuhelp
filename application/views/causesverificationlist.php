<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>causes pageination</title>
</head>
<body>
<?php if(isset($fundraisers)):?>

        <?php foreach ($fundraisers as $index => $donation) :?>
                    <tr>
                    <td><?=$counts + 1?></td>
                    <td><?=$donation->name?></td>
                    <td><?=$donation->email?></td>
                    <td><?=$donation->phone?></td>
                    <td><?=$donation->amount?></td>
                    <td><?=$donation->location?></td>
                    <td><?=$donation->age?></td>
                    <td><?=$donation->end_date?></td>
                    <td><?=$donation->cause_heading?></td>
                    <td><?=$donation->cause_description?></td>
                    <td><a href="<?=base_url('assets/individualform_img/'.$donation->cover_image)?>"><img src="<?=base_url('assets/individualform_img/'.$donation->cover_image)?>" style='width:50px;height:50px;' alt='<?=$donation->cover_image?>'></a></td>
                    <td><?=$donation->created_at?></td>
                    <td><?=$donation->username?></td>
                    <td><?=$donation->raised_amount?></td>
                    <td><?=$donation->verified == 1 ? 'Yes' : 'No'?></td>
                    <td class='d-flex'>
                        
                        <button onclick='editDonation(json_encode($donation))' class='btn btn-primary fw-bold' data-toggle='modal' data-target='#editDonationModal'>
                            Edit
                        </button>&nbsp;&nbsp;
                        <button onclick="setUrl(`<?=$donation->email ?>`,<?=$donation->user_id ?>,`<?=$donation->username ?>`,<?=$donation->Verifyemailcount?>,<?php echo $donation->Rejectemailcount?>)" class='btn btn-danger fw-bold' data-toggle='modal' data-target='#sendmail'>
                            Status
                        </button>
                </td>
            </tr>
             <?php ++$counts; endforeach;?>

             <?php endif;?>

</body>     
</html>