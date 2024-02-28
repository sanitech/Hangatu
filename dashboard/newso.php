<?=
include('header.php');
?><div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Oromifa News</h5>
            <!-- <small class="text-muted float-end">Default label</small> -->
        </div>
        <div class="card-body">
            <form action="../backend/newsHandler.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">News Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="basic-default-name" placeholder="Title here" />
                    </div>
                </div>
                <input type="hidden" name="newsType" id="" value="oro">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                    <div class="col-sm-10">
                        <textarea id="basic-default-message" name="news" class="form-control" placeholder="News Here" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <h5 class="card-header">News List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>News Title</th>
                        <th>News</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $stm = $db->prepare("SELECT * FROM news WHERE ntype = 'oro' ORDER BY nid DESC");
                    $stm->execute();
                    $result = $stm->fetchAll();
                    // output data of each row
                    foreach ($result as $key => $row) {
                        $id = $row['nid'];
                        $title = $row['title'];
                        $news = $row['news'];

                    ?>
                        <tr>
                            <td>
                                <?= ++$key ?>
                            </td>
                            <td>
                                <?= $title ?>
                            </td>
                            <td>
                                <?= $news ?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>


                        </tr>

                    <?php

                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>