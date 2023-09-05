$(document).ready(function () {
    $('.update_btn').click(function (e) {
        e.preventDefault();

        var profile_id = $(this).closest('tr').find('.profile_id').text();

        $.ajax({
            type: "POST",
            url: "update.php",
            data: {
                'checking_updatebtn': true,
                'profile_id': profile_id,
            },
            success: function (response) {
                $.each(response, function (key, value) {
                    $('#update_id').val(value['id']);
                    $('#update_fname').val(value['fname']);
                    $('#update_lname').val(value['lname']);
                    $('#update_district').val(value['district']);

                    // image section
                    $('.preview_img').attr('src', 'images/' + value['profilePicture'] + '');
                    $('#image_old').val(value['profilePicture']);


                    // date of brith
                    $('#update_dob').val(value['date_of_birth']);


                    // education
                    // $('#bsc[value="' + value['education'] + '"]').prop('checked', true);

                    if (response.education && response.education.length > 0) {
                        response.education.forEach(function (value) {
                            $('#bsc' + value).prop('checked', true);
                        });
                    }



                    // genter
                    if ((value['gender']) == 'male') {
                        $('#update_male').val(value['gender']).attr("checked", true);
                    } else if ((value['gender']) == 'female') {
                        $('#update_female').val(value['gender']).attr("checked", true);
                    }

                    $('#update_comments').val(value['comments']);
                });
                $('#updateModal').modal('show');
            }
        });

    });

    // delete section
    $('.delete_btn').click(function (e) {
        e.preventDefault();

        var profile_id = $(this).closest('tr').find('.profile_id').text();
        console.log(profile_id);
        $('#delete_id').val(profile_id);
        $('#deleteModal').modal('show');

    });
});