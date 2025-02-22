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
                $list=" ";
                if(response.length==0){
                    $list="<h2 class='text-danger text-center'>There is no found</h2>";
                    return;
                }

                response.forEach(e => {
                     $list=` <h2 class="text-center">Add Details for ${e.name}</h2>
                    <div class="row mb-3">
                        <div class="col-10 mx-auto">
                            <div class="card">
                                <div class="card-body mb-3">

                                       <input type="hidden" value="${e.id}" id="id">
                                        <div class="form-group">
                                            <label for="width">Width</label>
                                            <input type="number" class="form-control" id="width" name="width"  placeholder="Enter Width..">
                                            <div class="mt-1 text-danger error ">

                                            </div>
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="heigth">Height</label>
                                            <input type="number" class="form-control" id="height" name="height" placeholder="Enter Width..">
                                                <div class="mt-1 text-danger error">

                                                </div>
                                            </div>
                                          <div class="form-group mt-3">
                                            <label for="model">Model Number</label>

              <input type="text" class="form-control" id="model" name="model"  placeholder="Enter Model..">
                                            <div class="mt-1 text-danger error">

                                            </div>
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="warr">Warrantly</label>
                                            <input type="number" class="form-control " id="war" name="war"  placeholder="Enter Warrantly..">
                                            <div class="mt-1 text-danger error">

                                            </div>
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="m1">Material 1</label>
                                            <input type="text" class="form-control" id="m1" name="m1"  placeholder="Enter Material 1..">
                                            <div class="mt-1 text-danger error">

                                            </div>
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="m2">Material 2</label>
                                            <input type="text" class="form-control" id="m2" name="m2"  placeholder="Enter Material 2..">
                                            <div class="mt-1 text-danger error">

                                            </div>
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="coun">Country</label>
                                            <input type="text" class="form-control" id="coun" name="coun" placeholder="Enter Country..">
                                            <div class="mt-1 text-danger error">

                                            </div>
                                          </div>
                                          <div class="mt-3 ">
                                            <button class="btn btn-primary block w-100" id="SubmitForm">Add Details</button>
                                          </div>

                                </div>

                            </div>
                        </div>
                     </div>`;
                });
                $("#FormContainer").html($list);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
         })
    });
})
