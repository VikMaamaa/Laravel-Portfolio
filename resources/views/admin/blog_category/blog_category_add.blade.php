@extends('admin.admin_master')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Blog Category Page</h4> <br> <br>

                        <form method="POST" id="myForm" action="{{ route('store.blog.category') }}" >
                           @csrf



                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" name="blog_category" type="text"   id="example-text-input">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Category ">
                        </form>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>


@endsection

@section('end-script')
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){

                $('#showImage').attr('src', e.target.result)
            }

            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>

<script type="text/javascript">
   $(document).ready(function() {
    $('#myForm').validate({
        rules: {
            blog_category: {
                required: true
            },
            blog_title: {
                required: true
            }
        },
        messages: {
            blog_category: {
                required: 'Please Enter Blog Category'
            },
            blog_title:{
                required: 'Please Enter Blog Title'
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error)
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })
   })
</script>
@endsection
