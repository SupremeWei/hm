$("[name='image']").click(function (e) {
    $deleteImageUrl = $(this).attr('data-delete-url');
    $deleteImageName = $(this).attr('data-delete-name');

    swal({
            title: "是否要刪除",
            text: $deleteImageName,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dd1215",
            confirmButtonText: "是, 確定刪除",
            cancelButtonText: "否, 取消刪除",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "DELETE",
                    url: $deleteImageUrl,
                    data: {},
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        swal("Okay", "圖片刪除成功", "success")
                        location.reload();
                    },
                    error: function (result) {
                        swal("圖片刪除失敗", result.message, "error");
                    }
                });
            } else {
                swal("取消更換", "並未執行換上新PDF檔案", "error");
            }
        }
    );
});