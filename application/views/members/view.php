<div class="container">
    <h2><?php echo $title; ?></h2>
    <div class="col-md-6">
        <div class="card" style="width:400px">
            <div class="card-body">
                <h4 class="card-title"><?php echo $member['nama_lengkap']; ?></h4>
                <p class="card-text"><b>Alamat:</b> <?php echo $member['alamat']; ?></p>
                <p class="card-text"><b>Tempat Lahir:</b> <?php echo $member['tempat_lahir']; ?></p>
                <p class="card-text"><b>Tanggal Lahir:</b> <?php echo $member['tgl_lahir']; ?></p>
                <p class="card-text"><b>Gender:</b> <?php echo $member['gender']; ?></p>
                <p class="card-text"><b>No KTP:</b> <?php echo $member['no_ktp']; ?></p>
                <p class="card-text"><b>No Handphone:</b> <?php echo $member['no_hp']; ?></p>
                <p class="card-text"><b>Created:</b> <?php echo $member['created']; ?></p>
                <a href="<?php echo site_url('members'); ?>" class="btn btn-primary">Back To List</a>
            </div>
        </div>
    </div>
</div>