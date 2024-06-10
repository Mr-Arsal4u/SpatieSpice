<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spatie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="mx-auto p-2" style="width: 200px;">
    <h1>
        <a href="#" class="btn btn-primary">Back</a>
    </h1>
</div>
    <div class="container-sm mt-5" style="width: 800px">
        <div class="row justify-content-center" id="main_form">
            <div class="col-md-12 myTab">
                <div class="page-header">
                    <div class="costumer-detail card">
                        <div class="card-header">Assign Permissions</div>
                        <div class="card-body p-4">
                            <form id="permissions_assignment_form">
                                <div class="form-group pb-4">
                                    <select class="form-control" name="role" id="role" onfocus='this.size=6;'
                                        onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                        <option value="" id="role-0">Select Role</option>
                                        @foreach ($roles as $role_check)
                                            <option value="{{ $role_check->id }}"
                                                @if (isset($role) && $role['name'] == $role_check->name) selected @endif
                                                id="role-{{ $role_check->id }}">{{ $role_check->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    @foreach ($modules as $module)
                                        @if (!$module->parentModule)
                                            <div class="col-md-4 mt-3">
                                                <div class="">
                                                    <label
                                                        class="d-flex align-items-center flex-heading mb-2 bold"><input
                                                            type="checkbox" class="module-checkbox"
                                                            value="{{ $module->id }}"
                                                            id="module-{{ $module->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $module->name)); ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row ms-3">
                                                @if ($module->subModules->count() > 0)
                                                    @foreach ($module->permissions as $permission)
                                                        <div class="col-md-4">
                                                            <div class="ps-3">
                                                                <label
                                                                    class="d-flex align-items-center flex-heading mb-2"><input
                                                                        type="checkbox"
                                                                        class="permission-checkboxes-{{ $module->id }}"
                                                                        name="permission[]"
                                                                        data-module="{{ $module->id }}"
                                                                        value="{{ $permission->id }}"
                                                                        id="permi-{{ $permission->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
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
                                                                class="d-flex align-items-center flex-heading mb-2 bold"><input
                                                                    type="checkbox"
                                                                    class="subModule-checkboxes-{{ $module->id }}"
                                                                    data-module="{{ $module->id }}"
                                                                    value="{{ $subModule->id }}"
                                                                    id="subMod-{{ $subModule->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $subModule->name)); ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row ms-3">
                                                        @if ($subModule->subModules->count() > 0)
                                                            @foreach ($subModule->permissions as $permission)
                                                                <div class="col-md-4">
                                                                    <div class="ps-3">
                                                                        <label
                                                                            class="d-flex align-items-center flex-heading mb-2"><input
                                                                                type="checkbox"
                                                                                class="permission-checkboxes-{{ $subModule->id }}"
                                                                                name="permission[]"
                                                                                data-module="{{ $module->id }}"
                                                                                data-subModule="{{ $subModule->id }}"
                                                                                value="{{ $permission->id }}"
                                                                                id="permi-{{ $permission->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                    </div>
                                                    <div class="row ms-3">
                                                        @foreach ($subModule->subModules as $subSubModule)
                                                            <div class="col-md-12 ml-3">
                                                                <div class="ps-3">
                                                                    <label
                                                                        class="d-flex align-items-center flex-heading mb-2 bold"><input
                                                                            type="checkbox"
                                                                            class="subSubModule-checkboxes-{{ $subModule->id }}"
                                                                            data-module="{{ $module->id }}"
                                                                            data-subModule="{{ $subModule->id }}"
                                                                            value="{{ $subSubModule->id }}"
                                                                            id="subSubMod-{{ $subSubModule->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $subSubModule->name)); ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row ms-3">
                                                                @foreach ($subSubModule->permissions as $permission)
                                                                    <div class="col-md-4">
                                                                        <div class="ps-3">
                                                                            <label
                                                                                class="d-flex align-items-center flex-heading mb-2"><input
                                                                                    type="checkbox"
                                                                                    class="permission-checkboxes-{{ $subSubModule->id }}"
                                                                                    name="permission[]"
                                                                                    data-module="{{ $module->id }}"
                                                                                    data-subModule="{{ $subModule->id }}"
                                                                                    data-subSubModule="{{ $subSubModule->id }}"
                                                                                    value="{{ $permission->id }}"
                                                                                    id="permi-{{ $permission->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        @foreach ($subModule->permissions as $permission)
                                                            <div class="col-md-4">
                                                                <div class="ps-3">
                                                                    <label
                                                                        class="d-flex align-items-center flex-heading mb-2"><input
                                                                            type="checkbox"
                                                                            class="permission-checkboxes-{{ $subModule->id }}"
                                                                            name="permission[]"
                                                                            data-module="{{ $module->id }}"
                                                                            data-subModule="{{ $subModule->id }}"
                                                                            value="{{ $permission->id }}"
                                                                            id="permi-{{ $permission->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                @endif
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($module->permissions as $permission)
                                            <div class="col-md-4">
                                                <div class="ps-3">
                                                    <label class="d-flex align-items-center flex-heading mb-2"><input
                                                            type="checkbox"
                                                            class="permission-checkboxes-{{ $module->id }}"
                                                            name="permission[]" data-module="{{ $module->id }}"
                                                            value="{{ $permission->id }}"
                                                            id="permi-{{ $permission->id }}">&nbsp;&nbsp;<?php echo ucwords(str_replace('_', ' ', $permission->name)); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                @endif
                                @endforeach
                        </div>
                        <br /><br />
                        <div class="d-flex justify-content-end pt-3">
                            <button type="button" class="btn btn-success assign-permission-btn">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('permission.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
