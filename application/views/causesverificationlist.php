<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>causes pageination</title>
</head>
<body>
<?php if(isset($fundraisers)):?>


   <!--  <tbody id="causeslist">
                             <?php if (!empty($fundraisers)): $i = $sno + 1; ?>  -->
                             <?php foreach ($fundraisers as $index => $donation): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlspecialchars($donation->name); ?></td>
                    <td><?php echo htmlspecialchars($donation->email); ?></td>
                    <td><?php echo htmlspecialchars($donation->phone); ?></td>
                    <td><?php echo htmlspecialchars($donation->amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->location); ?></td>
                    <td><?php echo htmlspecialchars($donation->age); ?></td>
                    <td><?php echo htmlspecialchars($donation->end_date); ?></td>
                    <td><button data-bs-toggle="modal" data-bs-target="#viewdocuments" style="outline:none;border:none;" class="bg-transparent text-decoration-underline" onclick="viewDocuments('<?=$donation->cover_image?>')"><?php echo htmlspecialchars($donation->cause_heading); ?></button></td>
                    <td><?php echo htmlspecialchars($donation->cause_description); ?></td>
                    <td><?php echo htmlspecialchars($donation->created_at); ?></td>
                    <td><?php echo htmlspecialchars($donation->created_by); ?></td>
                    <td><?php echo htmlspecialchars($donation->raised_amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->verified == 1 ? 'Yes' : 'No'); ?></td>
                    <td>
                        <?php if ($donation->priority == 0): ?>
                            <span>No Priority</span>
                        <?php else: ?>
                            <span>Priority <?php echo htmlspecialchars($donation->priority); ?></span>
                        <?php endif; ?>
                    </td>
                    
                    <td class="d-flex">
                        <button onclick="editDonation(<?php echo htmlspecialchars(json_encode($donation)); ?>)" class="btn btn-primary fw-bold" data-toggle="modal" data-target="#editDonationModal">
                            Edit
                        </button>  &nbsp;&nbsp; 
                        <button onclick="setUrl('<?php echo $donation->email?>','<?php echo $donation->user_id;?>','<?php echo $donation->created_by;?>',<?php echo $donation->Verifyemailcount;?>,<?php echo $donation->Rejectemailcount;?>)" class="btn btn-danger fw-bold" data-toggle="modal" data-target="#sendmail">
                            Status
                        </button>  &nbsp;&nbsp; 
                        <button onclick="deleteCause(<?php echo $donation->id; ?>)" class="btn btn-danger fw-bold">
                            Delete
                        </button>&nbsp;&nbsp; 
                        <?php if ($this->session->userdata('adminName')): ?>
                            <?php if ($donation->priority == 0): ?>
                                <button class="btn btn-info fw-bold btn-sm insert-priority-btn" data-toggle="modal" data-target="#priorityModal" onclick="setPriorityId(<?php echo $donation->id; ?>)">
                                    Insert Priority
                                </button>
                                <button class="btn btn-warning fw-bold btn-sm no-priority-btn" style="display: none;" onclick="setNoPriority(<?php echo $donation->id; ?>)">
                                    No Priority
                                </button>
                            <?php else: ?>
                                <button class="btn btn-info fw-bold btn-sm insert-priority-btn" style="display: none;" data-toggle="modal" data-target="#priorityModal" onclick="setPriorityId(<?php echo $donation->id; ?>)">
                                    Insert Priority
                                </button>
                                <button class="btn btn-warning fw-bold btn-sm no-priority-btn" onclick="setNoPriority(<?php echo $donation->id; ?>)">
                                    No Priority
                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php ++$i; endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="16" style="text-align: center;">No records found.</td>
            </tr>
        <?php endif; ?>


    <!--   <?php foreach ($fundraisers as $index => $donation) :?>
                    <tr>
                    <td><?=$counts + 1?></td>
                    <td><?=$donation->name?></td>
                    <td><?=$donation->email?></td>
                    <td><?=$donation->phone?></td>
                    <td><?=$donation->amount?></td>
                    <td><?=$donation->location?></td>
                    <td><?=$donation->age?></td>
                    <td><?=$donation->end_date?></td>
                    <td><button data-bs-toggle="modal" data-bs-target="#viewdocuments" style="outline:none;border:none;" class="bg-transparent text-decoration-underline" onclick="viewDocuments('<?=$donation->cover_image?>')"><?php echo htmlspecialchars($donation->cause_heading); ?></button></td>
                    <td><?=$donation->cause_description?></td>
                    <!-- <td><a href="<?=base_url('assets/individualform_img/'.$donation->cover_image)?>"><img src="<?=base_url('assets/individualform_img/'.$donation->cover_image)?>" style='width:50px;height:50px;' alt='<?=$donation->cover_image?>'></a></td> 
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
                        </button>&nbsp;&nbsp;

                        
                        <button onclick="deleteCause(<?php echo $donation->id; ?>)" class="btn btn-danger fw-bold">
                             Delete
                        </button>

                </td>
            </tr>
             <?php ++$counts; endforeach;?>

             <?php endif;?>
 -->
             

</body>     
</html>