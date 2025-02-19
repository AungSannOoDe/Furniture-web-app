$(document).ready(function(){
    $(document).on("click", "#detailsTable .tr", function () {
        let id = $(this).find("td:first").text().trim();
        $data={
            'id':id
          }
         $.ajax({
            type: "GET",
            url:"http://127.0.0.1:8000/ajax/details/showForm",
            dataType: "json",
            data: $data,
         })
         $.ajax({
            type: "GET",
            url:"http://127.0.0.1:8000/ajax/details/showForm",
            dataType: "json",
            data:$data,
            success: function(response){
                console.log("Success: ", response);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
         })
    });
})
