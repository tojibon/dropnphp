<div class="toolbar_parent">
    <div class="toolbar toolbar_title">
        <h3><?php echo $site_title; ?></h3>
    </div>
</div>

<?php if (!empty($err)) { ?> 
    <p class="err"><?php echo $err ?></p>
<?php } ?>

<?php if (!empty($msg)) { ?> 
    <p class="msg"><?php echo $msg ?></p>
<?php } ?>
<a class="cancelEdit" href="index.php?controller=role_user">Cancel</a>
<div class="content">
    <div class="form">
        <form name="add_articles" action="<?php echo BASE_URL ?>admin/index.php?controller=role_user&action=add" method="post" enctype="multipart/form-data">
            <p>
                <label>Title : </label>
                <input type="text" name="title" value="<?php echo!empty($_POST['title']) ? $_POST['title'] : '' ?>" class="medium" />
            </p>  
			<p><label>User role type: </label>
                <select name="group_type" class="medium">
					<option value="">Select any one</option>
                    <option value="admin" <?php if (!empty($_POST['group_type']) && $_POST['group_type'] == 'admin') { ?> selected="selected" <?php } ?>>Admin</option>
                    <option value="subscriber" <?php if (!empty($_POST['group_type']) && $_POST['group_type'] == 'subscriber') { ?> selected="selected" <?php } ?>>Subscriber</option>
                </select>
            </p>
            <div class="permission">
                <h2 style="padding: 0 0 10px 0px; font-size: 18px; font-weight: bold;">Permission :</h2>
                <dl class="permissionList">
                    <?php
                    if (!empty($permission_types)) {
                        foreach ($permission_types as $key => $value) {
                            $title = $value['title'];
                            $Item = strtolower($value['title']);
                            $Item_key = strtolower($value['item_key']);
                            if ($value['p_type_id'] == 1) {
                                ?>
                                <dd>
                                    <h2><?php echo $title; ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />                                
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="read" /><label class="chkLabel">Can read <?php echo $Item; ?>.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 2) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 3) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 4) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 5) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 6) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 7) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 8) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add item to <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move item <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 9) { ?>
								<?php if($this->app->session->get_var('group_id') == 2){ ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="backup"/><label class="chkLabel">Can <?php echo $Item; ?>.</label></p>
                                </dd>
							<?php } ?>
                            <?php } elseif ($value['p_type_id'] == 10) { ?>
								<?php if($this->app->session->get_var('group_id') == 1 || $this->app->session->get_var('group_id') == 2){ ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>  
							<?php } ?>
                            <?php } elseif ($value['p_type_id'] == 11) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
									<?php if($this->app->session->get_var('group_id') == 2){ ?>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
									<?php } ?>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 12) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="add"/><label class="chkLabel">Can add <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="edit" /><label class="chkLabel">Can edit <?php echo $Item; ?>.</label></p>
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="delete" /><label class="chkLabel">Can move <?php echo $Item; ?> to trash.</label></p>
                                </dd>
                            <?php } elseif ($value['p_type_id'] == 13) { ?>
                                <dd>
                                    <h2><?php echo $title ?></h2>
                                    <input type="hidden" name="permision[<?php echo $value['p_type_id']; ?>][id]" value="<?php echo $value['p_type_id']; ?>" />
                                    <p class="para"><input class="chk" type="checkbox" name="permision[<?php echo $value['p_type_id']; ?>][permision_item][]" value="read"/><label class="chkLabel">Can read <?php echo $Item; ?>.</label></p>
                                </dd>
                            <?php } ?>
                        <?php } ?>

                    <?php } else { ?>
                        <dd><p style="font-size: 14px;">No permission available !!</p></dd>
                    <?php } ?>
                </dl>              
            </div>
            <p><label>Status: </label>
                <select name="status" class="medium">
                    <option value="active" <?php if (!empty($_POST['status']) && $_POST['status'] == 'active') { ?> selected="selected" <?php } ?>>Active</option>
                    <option value="inactive" <?php if (!empty($_POST['status']) && $_POST['status'] == 'inactive') { ?> selected="selected" <?php } ?>>Inctive</option>
                </select>
            </p>
            <p><input type="submit" name="submit" value="<?php echo $BUTTON_SUBMIT ?>" class="submit"></p>
        </form>
    </div>
</div>                