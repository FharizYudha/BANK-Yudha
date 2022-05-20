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
        <div class="col-md-12 search-panel">
            <!-- Search form -->
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="searchKeyword" class="form-control" placeholder="Search by keyword..." value="<?php echo $searchKeyword; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-outline-secondary" value="Search">
                        <input type="submit" name="submitSearchReset" class="btn btn-outline-secondary" value="Reset">
                    </div>
                </div>
            </form>
            
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo site_url('members/add/'); ?>" class="btn btn-success"><i class="plus"></i> New Customer</a>
            </div>
        </div>
        
        <!-- Data list table --> 
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th width = "200px">Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th width = "140px">Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>No KTP</th>
                    <th>No Handphone</th>
                    <th width = "240px"> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($members)){ foreach($members as $row){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['tempat_lahir']; ?></td>
                    <td><?php echo $row['tgl_lahir']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['no_ktp']; ?></td>
                    <td><?php echo $row['no_hp']; ?></td>
                    <td>
                        <a href="<?php echo site_url('members/view/'.$row['id']); ?>" class="btn btn-primary">View</a>
                        <a href="<?php echo site_url('members/edit/'.$row['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('members/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="7">No Customer(s) found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
    
        <!-- Display pagination links -->
        <div class="pagination pull-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>