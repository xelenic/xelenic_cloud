@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

    @push('after-styles')
    <link rel="stylesheet" href="{{url('css/aiz-core.css')}}">
    <link rel="stylesheet" href="{{url('css/vendors.css')}}">
    <script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
    </script>
    @endpush


    <form method="post" action="{{route('admin.products.update')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input onchange="slug_create()" id="product_name" type="text" value="{{$products_details->product_name}}" class="form-control" name="product_name">
                        </div>

                        <input type="hidden" name="product_id" value="{{$products_details->id}}">

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea type="text" rows="5" class="form-control" name="short_description">{{$products_details->short_description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Screenshots
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="screenshots" value="{{$products_details->screenshots}}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="mytextarea" type="text" rows="20" class="form-control" name="description">{{$products_details->description}}</textarea>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Feature Image
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="images" value="{{$products_details->images}}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Icon
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="icon" value="{{$products_details->icon}}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category">
                                <option value="tools"  {{$products_details->category == "tools" ? "selected" : ""}}>Tools and Service</option>
                                <option value="cloud-products" {{$products_details->category == "cloud-products" ? "selected" : ""}}>Cloud Products</option>
                                <option value="business-apis" {{$products_details->category == "business-apis" ? "selected" : ""}}>Business APIs</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" value="{{$products_details->link}}" class="form-control" name="link" >
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" value="{{$products_details->price}}" class="form-control" name="price">
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input id="slug" type="text" value="{{$products_details->slug}}" class="form-control" name="slug">
                        </div>

                        <div class="form-group">
                            <label>Product Type</label>
                            <select class="form-control" name="product_type">
                                <option value="free" {{$products_details->product_type == "free" ? "selected" : ""}}>Free</option>
                                <option value="paid" {{$products_details->product_type == "paid" ? "selected" : ""}}>Paid</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <script>
        function slug_create()
        {
            var product_name = $('#product_name').val();
            var products = slugify(product_name)
            $('#slug').val(products);
        }

        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }
    </script>

@endsection




