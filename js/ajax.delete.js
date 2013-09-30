function confirmDelete(user_id) {
        if (confirm('Are you sure you want to delete this user?')) {
            //Make ajax call
            $.ajax({
                url: "scripts/delete_user.php",
                type: "POST",
                data: {user_id : user_id},
                dataType: "html", 
                success: function(response) {
                    alert(response);
                    // window.setTimeout(window.location.reload(), 3000);
                    window.location = '?page=all_users';
                }
            });

        }
    }