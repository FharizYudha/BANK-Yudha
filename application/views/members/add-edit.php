<div class="container">
    <h2><?php echo $title; ?></h2>
    
    <!-- Display status message -->
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    
    <div class="row">
        <div class="col-md-6">
            <form method="post">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Enter Nama Lengkap" value="<?php echo !empty($member['nama_lengkap'])?$member['nama_lengkap']:''; ?>" >
                        <?php echo form_error('nama_lengkap','<div class="invalid-feedback">','</div>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat" value="<?php echo !empty($member['alamat'])?$member['alamat']:''; ?>" >
                    <?php echo form_error('alamat','<div class="invalid-feedback">','</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Enter Tempat Lahir" value="<?php echo !empty($member['tempat_lahir'])?$member['tempat_lahir']:''; ?>" >
                    <?php echo form_error('tempat_lahir','<div class="invalid-feedback">','</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Enter Tanggal Lahir" value="<?php echo !empty($member['tgl_lahir'])?$member['tgl_lahir']:''; ?>" >
                    <?php echo form_error('tgl_lahir','<div class="invalid-feedback">','</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender1" name="gender" class="custom-control-input" value="Male" <?php echo empty($member['gender']) || (!empty($member['gender']) && ($member['gender'] == 'Male'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="gender1">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender2" name="gender" class="custom-control-input" value="Female" <?php echo (!empty($member['gender']) && ($member['gender'] == 'Female'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="gender2">Female</label>
                    </div>
                    <?php echo form_error('gender','<div class="invalid-feedback">','</div>'); ?>
                </div>
                <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" class="form-control" name="no_ktp" placeholder="Enter No KTP" value="<?php echo !empty($member['no_ktp'])?$member['no_ktp']:''; ?>" >
                    <?php echo form_error('no_ktp','<div class="invalid-feedback">','</div>'); ?>
                </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Enter No Handphone" value="<?php echo !empty($member['no_hp'])?$member['no_hp']:''; ?>" >
                    <?php echo form_error('no_hp','<div class="invalid-feedback">','</div>'); ?>
                </div>
                
                <a href="<?php echo site_url('members'); ?>" class="btn btn-secondary">Back</a>
                <input type="submit" name="memSubmit" class="btn btn-success" value="Submit">
            </form>
        </div>
    </div>
</div>