<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
    data-header-position="fixed">
    <!-- --------------------------------------------------- -->
    <!-- Sidebar -->
    <!-- --------------------------------------------------- -->
    @include('admin.partials.aside')
    <!-- --------------------------------------------------- -->
    <!-- Main Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        @include('admin.partials.header')

        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Permissions</h4>

                        </div>

                    </div>
                </div>
            </div>
            <div class="widget-content searchable-container list">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="page-header">
                                <div class="costumer-detail card">
                                    <div class="card-body p-4">
                                        <form id="permissions_assignment_form">
                                            @csrf
                                            <div class="form-group pb-4">
                                                <select class="form-control" name="role" id="role">
                                                    <option value="" id="role-0">Select Role</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}"
                                                            id="role-{{ $role->id }}">
                                                            {{ \App\Helpers\GeneralHelper::STRING_REPLACE($role->name) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="row">
                                                @foreach ($modules as $module)
                                                    @if (!$module->parentModule)
                                                        <div class="col-md-4 mt-3">
                                                            <div class="">
                                                                <label
                                                                    class="d-flex align-items-center flex-heading mb-2 bold">
                                                                    <input type="checkbox" class="module-checkbox"
                                                                        value="{{ $module->id }}"
                                                                        id="module-{{ $module->id }}">
                                                                    &nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $module->name)); ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row ms-3">
                                                            @foreach ($module->permissions as $permission)
                                                                <div class="col-md-4">
                                                                    <div class="ps-3">
                                                                        <label
                                                                            class="d-flex align-items-center flex-heading mb-2">
                                                                            <input type="checkbox"
                                                                                class="permission-checkboxes-{{ $module->id }}"
                                                                                name="permission[]"
                                                                                data-module="{{ $module->id }}"
                                                                                value="{{ $permission->id }}"
                                                                                id="permi-{{ $permission->id }}">
                                                                            &nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="row ms-3">
                                                            @foreach ($module->subModules as $subModule)
                                                                <div class="col-md-12 ml-3">
                                                                    <div class="ps-3">
                                                                        <label
                                                                            class="d-flex align-items-center flex-heading mb-2 bold">
                                                                            <input type="checkbox"
                                                                                class="subModule-checkboxes-{{ $module->id }}"
                                                                                data-module="{{ $module->id }}"
                                                                                value="{{ $subModule->id }}"
                                                                                id="subMod-{{ $subModule->id }}">
                                                                            &nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $subModule->name)); ?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="row ms-3">
                                                                    @foreach ($subModule->permissions as $permission)
                                                                        <div class="col-md-4">
                                                                            <div class="ps-3">
                                                                                <label
                                                                                    class="d-flex align-items-center flex-heading mb-2">
                                                                                    <input type="checkbox"
                                                                                        class="permission-checkboxes-{{ $subModule->id }}"
                                                                                        name="permission[]"
                                                                                        data-module="{{ $module->id }}"
                                                                                        data-subModule="{{ $subModule->id }}"
                                                                                        value="{{ $permission->id }}"
                                                                                        id="permi-{{ $permission->id }}">
                                                                                    &nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                    </div>
                                    <br /><br />
                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button"
                                            class="btn btn-success assign-permission-btn">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
   
