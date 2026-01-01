<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <link href="<?php echo e(asset('backEnd/assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('backEnd/assets/libs/selectize/css/selectize.bootstrap3.css')); ?>" rel="stylesheet" type="text/css" />

    <style>
        /* Dashboard Card Styling */
        .dashboard-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            border: 1px solid #e0e0e0;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            border-color: #1a73e8;
        }

        .icon-circle {
            height: 2.2rem;
            width: 2.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 0.5rem;
        }

        .bg-primary-soft {
            background-color: rgba(26, 115, 232, 0.1);
        }

        .bg-success-soft {
            background-color: rgba(40, 167, 69, 0.1);
        }

        .bg-warning-soft {
            background-color: rgba(255, 193, 7, 0.1);
        }

        .bg-info-soft {
            background-color: rgba(23, 162, 184, 0.1);
        }

        .bg-danger-soft {
            background-color: rgba(220, 53, 69, 0.1);
        }

        .text-primary {
            color: #1a73e8;
        }

        .text-success {
            color: #28a745;
        }

        .text-warning {
            color: #ffc107;
        }

        .text-info {
            color: #17a2b8;
        }

        .text-danger {
            color: #dc3545;
        }

        .row.g-3>a {
            text-decoration: none;
        }
    </style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">

                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row g-3">

            <!-- All Orders -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'all'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_order); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-primary-soft">
                            <i data-feather="shopping-cart" class="text-primary"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">All Orders</p>
                    </div>
                </div>
            </a>

            <!-- Processing -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'processing'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_processing); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-success-soft">
                            <i data-feather="rotate-cw" class="text-success"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">Processing</p>
                    </div>
                </div>
            </a>

            <!-- Payment Pending -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'unpaid'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_unpaid); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-warning-soft">
                            <i data-feather="alert-triangle" class="text-warning"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">Payment Pending</p>
                    </div>
                </div>
            </a>

            <!-- On Hold -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'pending'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_pending); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-info-soft">
                            <i data-feather="pause-circle" class="text-info"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">On Hold</p>
                    </div>
                </div>
            </a>

            <!-- Canceled -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'canceled'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_canceled); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-danger-soft">
                            <i data-feather="x-circle" class="text-danger"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">Canceled</p>
                    </div>
                </div>
            </a>

            <!-- Completed -->
            <a href="<?php echo e(route('admin.orders', ['slug' => 'completed'])); ?>" class="col-xl-2 col-lg-4 col-md-6 mb-3">
                <div class="dashboard-card">
                    <div class="text-center mb-2">
                        <h4 class="text-dark mb-0"><span data-plugin="counterup"><?php echo e($total_completed); ?></span></h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-primary-soft">
                            <i data-feather="check-circle" class="text-primary"></i>
                        </div>
                        <p class="text-muted mb-0 ms-2">Completed</p>
                    </div>
                </div>
            </a>

        </div>




        <!-- end row-->



        <div class="container-fluid">

            <!-- Note Modal -->
            <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="noteModalLabel">Leave a Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" id="noteText" rows="4" placeholder="Write your note here..."></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveNote">Save Note</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="<?php echo e(route('admin.order.create')); ?>" class="btn btn-danger rounded-pill"><i
                                    class="fe-shopping-cart"></i> Add New</a>
                        </div>
                        <h4 class="page-title"><?php echo e($order_status->name); ?> Order (<?php echo e($order_status->orders_count); ?>)</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row order_page">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <ul class="action2-btn">
                                        <li><a data-bs-toggle="modal" data-bs-target="#asignUser"
                                                class="btn rounded-pill btn-success"><i class="fe-plus"></i> Assign
                                                User</a>
                                        </li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#changeStatus"
                                                class="btn rounded-pill btn-primary"><i class="fe-plus"></i> Change
                                                Status</a>
                                        </li>
                                        <li><a href="<?php echo e(route('admin.order.bulk_destroy')); ?>"
                                                class="btn rounded-pill btn-danger order_delete"><i class="fe-plus"></i>
                                                Delete
                                                All</a></li>
                                        <li><a href="<?php echo e(route('admin.order.order_print')); ?>"
                                                class="btn rounded-pill btn-info multi_order_print"><i
                                                    class="fe-printer"></i>
                                                Print</a></li>
                                        <?php if($steadfast): ?>
                                            <li><a href="<?php echo e(route('admin.bulk_courier', 'steadfast')); ?>?status=5"
                                                    class="btn rounded-pill btn-info multi_order_courier"><i
                                                        class="fe-truck"></i> Steadfast</a></li>
                                        <?php endif; ?>
                                        <li><a data-bs-toggle="modal" data-bs-target="#pathao"
                                                class="btn rounded-pill btn-info"><i class="fe-truck"></i> pathao</a></li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <form class="custom_form">
                                        <div class="form-group">
                                            <input type="text" name="keyword" placeholder="Search">
                                            <button class="btn  rounded-pill btn-info">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive ">
                                <table id="datatable-buttons" class="table table-striped   w-100">
                                    <thead>
                                        <tr>
                                            <th style="width:2%">
                                                <div class="form-check"><label class="form-check-label"><input
                                                            type="checkbox" class="form-check-input checkall"
                                                            value=""></label>
                                            <th style="width:2%">SL</th>
                            </div>
                            </th>
                            <th style="width:8%">Action</th>
                            <th style="width:8%">Invoice</th>
                            <th style="width:10%">Date</th>
                            <th style="width:10%">Name</th>
                            <th style="width:10%">Phone</th>
                            <th style="width:6%">Check</th>
                            <th style="width:10%">Amount</th>
                            <th style="width:10%">Status</th>
                            <th style="width:14%">Note</th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php $__currentLoopData = $show_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" value="<?php echo e($value->id); ?>"></td>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td>
                                            <div class="button-list custom-btn-list">
                                                <a href="<?php echo e(route('admin.order.invoice', ['invoice_id' => $value->invoice_id])); ?>"
                                                    title="Invoice"><i class="fe-eye"></i></a>
                                                <a href="<?php echo e(route('admin.order.process', ['invoice_id' => $value->invoice_id])); ?>"
                                                    title="Process"><i class="fe-settings"></i></a>
                                                <a href="<?php echo e(route('admin.order.edit', ['invoice_id' => $value->invoice_id])); ?>"
                                                    title="Edit"><i class="fe-edit"></i></a>
                                                <form method="post" action="<?php echo e(route('admin.order.destroy')); ?>"
                                                    class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" value="<?php echo e($value->id); ?>" name="id">
                                                    <button type="submit" title="Delete" class="delete-confirm"><i
                                                            class="fe-trash-2"></i></button>


                                                </form>
                                            </div>
                                        </td>
                                        <td><?php echo e($value->invoice_id); ?></td>
                                        <td><?php echo e(date('d-m-Y', strtotime($value->updated_at))); ?><br>
                                            <?php echo e(date('h:i:s a', strtotime($value->updated_at))); ?></td>
                                        <td><strong><?php echo e($value->shipping ? $value->shipping->name : ''); ?></strong>
                                            <p><?php echo e($value->shipping ? $value->shipping->address : ''); ?></p>
                                        </td>
                                        <td><?php echo e($value->shipping ? $value->shipping->phone : ''); ?></td>
                                        <td>
                                            <a href="https://greenviewit.com/check-fraud-customer" target="_blank"
                                                title="Check for Fraud Customers" class="custom-link">
                                                <i data-feather="external-link"></i>
                                            </a>
                                        </td>
                                        <td>৳<?php echo e($value->amount); ?></td>

                                        <?php
                                            $slug = $value->status->slug ?? '';
                                            $statusName = $value->status->name ?? '';

                                            $badgeClass = match ($slug) {
                                                'pending' => 'bg-warning text-dark',
                                                'processing' => 'bg-info text-white',
                                                'on-the-way' => 'bg-primary text-white',
                                                'in-courier' => 'bg-secondary text-white',
                                                'completed' => 'bg-success text-white',
                                                'unpaid' => 'bg-danger text-white',
                                                'canceled' => 'bg-danger text-dark',
                                                default => 'bg-light text-dark',
                                            };
                                        ?>

                                        <td class="text-center">
                                            <span class="badge <?php echo e($badgeClass); ?> text-capitalize">
                                                <?php echo e($statusName); ?>

                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <!-- Note Button -->
                                            <button type="button"
                                                class="btn btn-sm ml-2 noteBtn
               <?php echo e($value->notes->first()?->order_note ? 'bg-warning text-dark' : 'bg-primary text-white'); ?>"
                                                data-id="<?php echo e($value->id); ?>"
                                                title="<?php echo e($value->notes->first()?->order_note); ?>">
                                                <?php echo e($value->notes->first()?->order_note ? 'Edit Note' : 'Add Note'); ?>

                                            </button>




                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            </table>
                        </div>
                        <div class="custom-paginate">
                            <?php echo e($show_data->links('pagination::bootstrap-4')); ?>

                        </div>
                    </div> <!-- end card body-->

                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
    <!-- Assign User End -->
    <div class="modal fade" id="asignUser" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('admin.order.assign')); ?>" id="order_assign">
                    <div class="modal-body">
                        <div class="form-group">
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="">Select..</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Assign User End-->

    <!-- Assign User End -->
    <div class="modal fade" id="changeStatus" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('admin.order.status')); ?>" id="order_status_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <select name="order_status" id="order_status" class="form-control">
                                <option value="">Select..</option>
                                <?php $__currentLoopData = $orderstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Assign User End-->
    <!-- pathao coureir start -->
    <div class="modal fade" id="pathao" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pathao Courier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('admin.order.pathao')); ?>" id="order_sendto_pathao">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pathaostore" class="form-label">Store</label>
                            <select name="pathaostore" id="pathaostore" class="pathaostore form-control">
                                <option value="">Select Store...</option>
                                <?php if(isset($pathaostore['data']['data'])): ?>
                                    <?php $__currentLoopData = $pathaostore['data']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($store['store_id']); ?>"><?php echo e($store['store_name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <?php endif; ?>
                            </select>
                            <?php if($errors->has('pathaostore')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('pathaostore')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <!-- form group end -->
                        <div class="form-group mt-3">
                            <label for="pathaocity" class="form-label">City</label>
                            <select name="pathaocity" id="pathaocity" class="chosen-select pathaocity form-control"
                                style="width:100%">
                                <option value="">Select City...</option>
                                <?php if(isset($pathaocities['data']['data'])): ?>
                                    <?php $__currentLoopData = $pathaocities['data']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city['city_id']); ?>"><?php echo e($city['city_name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <?php endif; ?>
                            </select>
                            <?php if($errors->has('pathaocity')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('pathaocity')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <!-- form group end -->
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Zone</label>
                            <select name="pathaozone" id="pathaozone"
                                class="pathaozone chosen-select form-control  <?php echo e($errors->has('pathaozone') ? ' is-invalid' : ''); ?>"
                                value="<?php echo e(old('pathaozone')); ?>" style="width:100%">
                            </select>
                            <?php if($errors->has('pathaozone')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('pathaozone')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <!-- form group end -->
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Area</label>
                            <select name="pathaoarea" id="pathaoarea"
                                class="pathaoarea chosen-select form-control  <?php echo e($errors->has('pathaoarea') ? ' is-invalid' : ''); ?>"
                                value="<?php echo e(old('pathaoarea')); ?>" style="width:100%">
                            </select>
                            <?php if($errors->has('pathaoarea')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('pathaoarea')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <!-- form group end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- pathao courier  End-->

    </div> <!-- container -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <!-- Plugins js-->
    <script src="<?php echo e(asset('backEnd/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backEnd/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backEnd/assets/libs/selectize/js/standalone/selectize.min.js')); ?>"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".checkall").on('change', function() {
                $(".checkbox").prop('checked', $(this).is(":checked"));
            });

            // order assign
            $(document).on('submit', 'form#order_assign', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                let user_id = $(document).find('select#user_id').val();

                var order = $('input.checkbox:checked').map(function() {
                    return $(this).val();
                });
                var order_ids = order.get();

                if (order_ids.length == 0) {
                    toastr.error('Please Select An Order First !');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        user_id,
                        order_ids
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            toastr.success(res.message);
                            window.location.reload();

                        } else {
                            toastr.error('Failed something wrong');
                        }
                    }
                });

            });

            // order status change 
            $(document).on('submit', 'form#order_status_form', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                let order_status = $(document).find('select#order_status').val();

                var order = $('input.checkbox:checked').map(function() {
                    return $(this).val();
                });
                var order_ids = order.get();

                if (order_ids.length == 0) {
                    toastr.error('Please Select An Order First !');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        order_status,
                        order_ids
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            toastr.success(res.message);
                            window.location.reload();

                        } else {
                            toastr.error('Failed something wrong');
                        }
                    }
                });

            });
            // order delete
            $(document).on('click', '.order_delete', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                var order = $('input.checkbox:checked').map(function() {
                    return $(this).val();
                });
                var order_ids = order.get();

                if (order_ids.length == 0) {
                    toastr.error('Please Select An Order First !');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        order_ids
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            toastr.success(res.message);
                            window.location.reload();

                        } else {
                            toastr.error('Failed something wrong');
                        }
                    }
                });

            });

            // multiple print
            $(document).on('click', '.multi_order_print', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                var order = $('input.checkbox:checked').map(function() {
                    return $(this).val();
                });
                var order_ids = order.get();

                if (order_ids.length == 0) {
                    toastr.error('Please Select Atleast One Order!');
                    return;
                }
                $.ajax({
                    type: 'GET',
                    url,
                    data: {
                        order_ids
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            console.log(res.items, res.info);
                            var myWindow = window.open("", "_blank");
                            myWindow.document.write(res.view);
                        } else {
                            toastr.error('Failed something wrong');
                        }
                    }
                });
            });
            // multiple courier
            $(document).on('click', '.multi_order_courier', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                console.log(url);
                var order = $('input.checkbox:checked').map(function() {
                    return $(this).val();
                });
                var order_ids = order.get();

                if (order_ids.length == 0) {
                    toastr.error('Please Select An Order First !');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        order_ids
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            console.log(res.message);
                            console.log(res.success);
                            console.log(res.failed);
                            toastr.success(res.message);
                            toastr.success(res.success);
                            toastr.error(res.failed);
                            window.location.reload();

                        } else {
                            console.log(res.message);
                            toastr.error('Failed something wrong');
                        }
                    }
                });

            });
        })
    </script>

    <script>
        $(document).ready(function() {
            var currentId;

            // Open modal
            $(document).on('click', '.noteBtn', function() {
                currentId = $(this).data('id');
                $.ajax({
                    url: '/admin/get-note/' + currentId,
                    type: 'GET',
                    success: function(response) {
                        $('#noteText').val(response.note ?? '');
                        $('#noteModal').modal('show');
                    }
                });
            });


            // Save note
            $('#saveNote').click(function() {
                var note = $('#noteText').val();
                $.ajax({
                    url: '/admin/save-note',
                    type: 'POST',
                    data: {
                        order_id: currentId,
                        note: note,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(response) {
                        $('#noteModal').modal('hide');

                        // Update button text dynamically
                        var btn = $('.noteBtn[data-id="' + currentId + '"]');
                        if (note.trim() === '') {
                            btn.text('Add Note')
                                .removeClass('bg-warning text-dark')
                                .addClass('bg-primary text-white')
                                .attr('title', '');
                        } else {
                            btn.text('Edit Note')
                                .removeClass('bg-primary text-white')
                                .addClass('bg-warning text-dark')
                                .attr('title', note);
                        }

                    },
                    error: function() {
                        alert('Something went wrong!');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u737498567/domains/technogeekbd.store/public_html/resources/views/backEnd/admin/dashboard.blade.php ENDPATH**/ ?>