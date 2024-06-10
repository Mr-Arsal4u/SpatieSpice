$('#role').change(function () {
    $(":checkbox").prop("checked", false);

    var role_id = $(this).val();

    $.ajax({
        method: "GET",
        url: "/permissions",
        data: {
            role_id: role_id
        }
    }).done(function (response) {
        console.log(response);
        // console.log(response.permissions);
        $.each(response.permissions, function (index, permissionId) {
            $('#permi-' + permissionId).prop('checked', true);
        });
        $('.module-checkbox').each(function () {
            var moduleId = $(this).val();
            var allChecked = true;
            $('.permission-checkboxes-' + moduleId).each(function () {
                if (!$(this).prop('checked')) {
                    allChecked = false;
                    return false;
                }
            });
            if (allChecked) {
                $(this).prop('checked', true);
                $('.subModule-checkboxes-' + moduleId).each(function () {
                    $(this).prop('checked', true);
                    var subModuleId = $(this).val();
                    $('.permission-checkboxes-' + subModuleId).prop('checked', true);
                });
            }
        });
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Error fetching permissions:', textStatus, errorThrown);
    });
});


$('.module-checkbox').click(function () {
    let id = $(this).val();
    if ($(this).is(':checked')) {
        $('.subModule-checkboxes-' + id).each(function () {
            $(this).prop('checked', true)
            let sub_id = $(this).val();
            $('.permission-checkboxes-' + sub_id).prop('checked', true);
            $('.subSubModule-checkboxes-' + sub_id).each(function () {
                $(this).prop('checked', true)
                let sub_sub_id = $(this).val();
                $('.permission-checkboxes-' + sub_sub_id).prop('checked', true);
            });
        });
        $('.permission-checkboxes-' + id).prop('checked', true);
    } else {
        $('.subModule-checkboxes-' + id).each(function () {
            $(this).prop('checked', false)
            let sub_id = $(this).val();
            $('.permission-checkboxes-' + sub_id).prop('checked', false);
            $('.subSubModule-checkboxes-' + sub_id).each(function () {
                $(this).prop('checked', false)
                let sub_sub_id = $(this).val();
                $('.permission-checkboxes-' + sub_sub_id).prop('checked', false);
            });
        });
        $('.permission-checkboxes-' + id).prop('checked', false);
    }
});

$('[class^="subModule-checkboxes-"]').click(function () {
    let module_id = $(this).attr('data-module');
    let sub_id = $(this).val();
    if ($(this).is(':checked')) {
        $('#module-' + module_id).prop('checked', true);
        $('.permission-checkboxes-' + module_id).prop('checked', true);
        $('.permission-checkboxes-' + sub_id).prop('checked', true);
        $('.subSubModule-checkboxes-' + sub_id).each(function () {
            $(this).prop('checked', true)
            let sub_sub_id = $(this).val();
            $('.permission-checkboxes-' + sub_sub_id).prop('checked', true);
        });
    } else {
        $('.permission-checkboxes-' + sub_id).prop('checked', false);
        $('.subSubModule-checkboxes-' + sub_id).each(function () {
            $(this).prop('checked', false)
            let sub_sub_id = $(this).val();
            $('.permission-checkboxes-' + sub_sub_id).prop('checked', false);
        });
        if ($('.subModule-checkboxes-' + module_id + ':checked').length <= 0
            && $('.permission-checkboxes-' + module_id + ':checked').length <= 0) {
            $('#module-' + module_id).prop('checked', false);
        }
    }
});

$('[class^="subSubModule-checkboxes-"]').click(function () {
    let module_id = $(this).attr('data-module');
    let subMod_id = $(this).attr('data-subModule');
    let sub_sub_id = $(this).val();
    if ($(this).is(':checked')) {
        $('#module-' + module_id).prop('checked', true);
        $('.permission-checkboxes-' + module_id).prop('checked', true)
        $('#subMod-' + subMod_id).prop('checked', true);
        $('.permission-checkboxes-' + subMod_id).prop('checked', true);
        $('.permission-checkboxes-' + sub_sub_id).prop('checked', true);
    } else {
        $('.permission-checkboxes-' + sub_sub_id).prop('checked', false);
        if ($('.subSubModule-checkboxes-' + subMod_id + ':checked').length <= 0
            && $('.permission-checkboxes-' + subMod_id + ':checked').length <= 0) {
            $('#subMod-' + subMod_id).prop('checked', false);
        }
        if ($('.subModule-checkboxes-' + module_id + ':checked').length <= 0
            && $('.permission-checkboxes-' + module_id + ':checked').length <= 0) {
            $('#module-' + module_id).prop('checked', false);
        }
    }
});

$('[class^="permission-checkboxes-"]').click(function () {
    let module_id = $(this).attr('data-module');
    let subMod_id = $(this).attr('data-subModule');
    let subSubMod_id = $(this).attr('data-subSubModule');
    if ($(this).is(':checked')) {
        $('#module-' + module_id).prop('checked', true);
        if (subSubMod_id) {
            $('#subSubMod-' + subSubMod_id).prop('checked', true);
            $('.permission-checkboxes-' + subMod_id).prop('checked', true);
        }
        if (subMod_id) {
            $('#subMod-' + subMod_id).prop('checked', true);
            $('.permission-checkboxes-' + module_id).prop('checked', true);
        }
    } else {
        if (!subMod_id) {
            if ($('.permission-checkboxes-' + module_id + ':checked').length <= 0) {
                $('#module-' + module_id).prop('checked', false);
                $('.subModule-checkboxes-' + module_id).each(function () {
                    $(this).prop('checked', false);
                    let sub_mod_id = $(this).val();
                    $('.permission-checkboxes-' + sub_mod_id).each(function () {
                        $(this).prop('checked', false);
                    });
                    if ($('.permission-checkboxes-' + sub_mod_id + ':checked').length <= 0) {
                        $('.subSubModule-checkboxes-' + sub_mod_id).each(function () {
                            $(this).prop('checked', false);
                            let sub_sub_mod_id = $(this).val();
                            $('.permission-checkboxes-' + sub_sub_mod_id).each(function () {
                                $(this).prop('checked', false);
                            });
                        });
                    }
                });
            }
        }
        if (!subSubMod_id) {
            if ($('.permission-checkboxes-' + subMod_id + ':checked').length <= 0) {
                $('#subMod-' + subMod_id).prop('checked', false);
                $('.subSubModule-checkboxes-' + subMod_id).each(function () {
                    $(this).prop('checked', false);
                    let sub_sub_mod_id = $(this).val();
                    $('.permission-checkboxes-' + sub_sub_mod_id).each(function () {
                        $(this).prop('checked', false);
                    });
                });
            }
        }
    }
});

$('.assign-permission-btn').click(function () {
    if ($('#role').val() === "") {
        toastr.remove();
        toastr.error("Please select a role first!");
        return false;
    }
    var formData = $('#permissions_assignment_form').serialize();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        method: "POST",
        url: "/save-permission",
        data: formData,
    }).success(function (data) {
        $.each(data, function (index, value) {
            $('#permi-' + value.id).prop('checked', true);
        });
        $('#success-message').text(data.success);
        $('#success-message').show();
        console.log(data.success);
        $('.module-checkbox').each(function () {
            let id = $(this).val();
            $('.subModule-checkboxes-' + id).each(function () {
                let sub_id = $(this).val();
                if ($('.permission-checkboxes-' + sub_id + ':checked').length > 0) {
                    $(this).prop('checked', true);
                }
            });
            if ($('.permission-checkboxes-' + id + ':checked').length > 0 ||
                $('.subModule-checkboxes-' + id + ':checked').length > 0) {
                $(this).prop('checked', true);
            }
        });
        toastr.remove();
        toastr.success("Permissions assigned successfully!");
    }).error(function () {
        toastr.remove();
        toastr.error("Permissions could not be assigned!");
    });
});
