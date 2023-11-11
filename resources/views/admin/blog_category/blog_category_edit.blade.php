@extends('admin.admin_master')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Blog Category Page</h4> <br> <br>

                        <form method="POST" action="{{ route('update.blog.category', $blogcategory->id) }}" >
                           @csrf



                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Edit Blog Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="blog_category" type="text"  value="{{ $blogcategory->blog_category }}"  id="example-text-input">
                                    @error('blog_category')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Blog Category ">
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
@endsection
