<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Lịch Sử Hoạt Động
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="height: 28rem">
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y">
                                <?php 
                                $logs = new Log_M();
                                $store = $logs->store();
                                while($set = $store->fetch()):
                                ?>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <?php  if($set['log_role'] == 1) :?>
                                                <span class="avatar bg-danger text-white">AD</span>
                                            <?php endif?>
                                            <?php  if($set['log_role'] == 2) :?>
                                                <span class="avatar bg-warning text-white">QL</span>
                                            <?php endif?>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong><?php echo $set['log_name']?></strong> <?php echo $set['log_desc']?> 
                                            </div>
                                            <div class="text-muted"><?php echo $set['log_date']?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Lịch Sử Đăng Nhập
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="height: 28rem">
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y">
                                <?php 
                                    $log = new LoginLog_M();
                                    $store = $log->store();
                                    while($set = $store->fetch()):
                                ?>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <?php if ($set['ll_status'] == "đăng nhập") { ?>
                                            <span class="avatar bg-success text-white">ĐN</span>
                                            <?php }else{?>
                                            <span class="avatar bg-danger text-white">ĐX</span>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong><?php echo $set['ll_name']?></strong><?php echo $set['ll_desc']?> <strong><?php echo $set['ll_status']?></strong>.
                                            </div>
                                            <div class="text-muted"><?php echo $set['created']?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>