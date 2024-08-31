{{-- @extends('/admin.layout')

@section('mainarea')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <!--end col-->
                <div class="col-xxl-3">

                </div>
                <div class="col-xxl-9">

                    <div class="card">
                        <div class="tab-content">

                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <div class="card-header">
                                    <h6 class="card-title mb-0"><?php echo @$_GET['type']; ?> Details</h6>
                                    <hr>
                                    @if (Session::get('Error_message') != null)
                                        <div class="alert_danger">
                                            <span class="closebtn"
                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                            <strong>Sorry!</strong> {{ Session::get('Error_message') }}.
                                        </div>
                                    @endif
                                    @if (Session::get('success_message') != null)
                                        <div class="alert_succes">
                                            <span class="closebtn"
                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                            <strong>Great!</strong> {{ Session::get('success_message') }}.
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="save_post" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="rec_id" value="{{ $values['rec_edit']->id ?? '' }}">
                                        <input type="hidden" name="type" value="<?php echo @$_GET['type']; ?>">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Title/Name</label>
                                                    <input type="text" class="form-control" id="phonenumberInput"
                                                        placeholder="Title" name="title"
                                                        value="{{ $values['rec_edit']->title ?? '' }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Image</label>
                                                    <input type="file" class="form-control" id="emailInput"
                                                        name="pic">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Date</label>
                                                    <input type="date" class="form-control" name="date"
                                                        value="{{ $values['rec_edit']->date ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="emailInput" class="form-label">Details</label>
                                                <textarea class="ckeditor-classic" name="desciption" id="passedYear">{{ $values['rec_edit']->desciption ?? '' }}</textarea>
                                            </div>

                                            <div class="col-lg-4">




                                                <label for="emailInput" class="form-label">.</label>
                                                <div class="hstack gap-2 ">

                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>

                                    <br>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card" id="coursesList">
                                                <div class="card-body">
                                                    <div class="row align-items-center g-2">
                                                        <div class="col-lg-3 me-auto">
                                                            <h6 class="card-title mb-0">Posts List </h6>
                                                        </div><!--end col-->

                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive table-card"
                                                        style="padding:0px 20px 0px 20px;">
                                                        <table class="table " id="example">
                                                            <thead class="text-muted">
                                                                <tr>

                                                                    <th>Sr</th>
                                                                    <th>Title</th>
                                                                    <th>Date</th>

                                                                    <th>Picture</th>
                                                                    <th>Type</th>
                                                                    <th>Posted_by</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">

                                                                <?php $sr = 1; ?>
                                                                @foreach ($values['records'] as $r_data)
                                                                    <tr>
                                                                        <td><?php echo $sr++; ?></td>

                                                                        <td>{{ $r_data->title }}</td>
                                                                        <td>{{ $r_data->date }}</td>
                                                                        <td><img src="upload/{{ $r_data->pic }}"
                                                                                width="120px" /> </td>
                                                                        <td>{{ $r_data->type }}</td>


                                                                        <td>{{ $r_data->posted_by }}</td>
                                                                        <td>
                                                                            <a href="post?type=<?php echo @$_GET['type']; ?>&id={{ $r_data->id }}"
                                                                                class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                    class="ph-pencil"></i></a>
                                                                            <a href="post?type=<?php echo @$_GET['type']; ?>&dell={{ $r_data->id }}"
                                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                                class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                    class="ph-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach






                                                            </tbody><!-- end tbody -->
                                                        </table><!-- end table -->

                                                    </div>

                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->

                                </div>
                            </div>


                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->
@endsection --}}

{{-- ? new --}}

@extends('/admin.layout')

@section('mainarea')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <!--end col-->
                <div class="col-xxl-3">

                </div>
                <div class="col-xxl-9">

                    <div class="card">
                        <div class="tab-content">

                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <div class="card-header">
                                    <h6 class="card-title mb-0"><?php echo @$_GET['type']; ?> Details</h6>
                                    <hr>
                                    @if (Session::get('Error_message') != null)
                                        <div class="alert_danger">
                                            <span class="closebtn"
                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                            <strong>Sorry!</strong> {{ Session::get('Error_message') }}.
                                        </div>
                                    @endif
                                    @if (Session::get('success_message') != null)
                                        <div class="alert_succes">
                                            <span class="closebtn"
                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                            <strong>Great!</strong> {{ Session::get('success_message') }}.
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="save_page" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <!-- URL Input -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="urlInput" class="form-label">URL</label>
                                                    <input type="text" class="form-control" id="urlInput"
                                                        placeholder="example-of-url" name="url">
                                                </div>
                                            </div>
                                            <!-- Header Content Textarea -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="headTags" class="form-label">Head Tags</label>
                                                    <textarea class="form-control" id="headTags" name="head_tags" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="headerContent" class="form-label">Header Content</label>
                                                    <textarea class="form-control" id="headerContent" name="header_content" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <!-- Body Content Textarea -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="bodyContent" class="form-label">Body Content</label>
                                                    <textarea class="form-control" id="bodyContent" name="body_content" rows="8"></textarea>
                                                </div>
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card" id="coursesList">
                                                <div class="card-body">
                                                    <div class="row align-items-center g-2">
                                                        <div class="col-lg-3 me-auto">
                                                            <h6 class="card-title mb-0">Posts List </h6>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive table-card"
                                                        style="padding:0px 20px 0px 20px;">
                                                        <table class="table " id="example">
                                                            <thead class="text-muted">
                                                                <tr>
                                                                    <th>id</th>
                                                                    <th>Url</th>
                                                                    <th>Head Tags</th>
                                                                    <th>Header Content</th>
                                                                    <th>Body Content</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                @foreach ($values['records'] as $r_data)
                                                                    <tr>
                                                                        <td>{{ $r_data->id }}</td>
                                                                        <td>{{ $r_data->url }}</td>
                                                                        <td>{{ $r_data->head_tags }}</td>
                                                                        <td>{{ $r_data->header_content }}</td>
                                                                        <td>{{ $r_data->body_content }}</td>
                                                                        <td>
                                                                            <a href="delete_page?&id={{ $r_data->id }}"
                                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                                class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                    class="ph-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
