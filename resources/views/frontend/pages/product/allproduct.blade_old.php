@extends('frontend.master')
@section('content')

    @include('frontend.pages.product.partials.style')

    @if (!empty($bannerImage))
        <section>
            <div>
                <img class="page_top_banner"
                    src="{{ !empty($bannerImage) && file_exists(public_path('storage/' . $bannerImage)) ? asset('storage/' . $bannerImage) : asset('frontend/images/no-banner(1920-330).png') }}"
                    alt="NGEN IT Shop">
            </div>
        </section>
    @else
        <section class="banner_single_page mb-4"
            style="background-image:url('{{ asset('frontend/images/custom_shop.jpg') }}');
        background-color: black;
        background-repeat: no-repeat;
        background-size: cover;
        height:300px;">

            <div class="container">
                <div class="single_banner_content">
                    <!-- image -->
                    <div class="single_banner_image text-center">
                        <img src="{{ asset('storage/' . $cat->image) }}" alt="" height="130px" width="150px"
                            style="margin-top:4rem;">
                    </div>
                    <!-- heading -->
                    <h1 class="single_banner_heading text-center text-white">{{ $cat->title }}</h1>

                </div>
            </div>
        </section>
    @endif


    <!-------- End--------->

    <!--=======// Content & Filter //=======-->
    <div class="container">
        <form action="{{ route('custom.product', $cat->slug) }}" method="POST">
            @csrf
            <div class="wrapper my-4">
                <div class="d-md-flex align-items-md-center">

                    <div class="ml-auto d-flex align-items-center views">

                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-center pt-2 clear">
                    <div class="text-muted filter-label">Applied Filters:</div>
                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Ascending By Name
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Ascending By Price
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Descending By Name
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Descending By Price
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['show']) && $_GET['show'] == '5')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Showing 5 Products
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['show']) && $_GET['show'] == '10')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Showing 10 Products
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['show']) && $_GET['show'] == '20')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Showing 20 Products
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['show']) && $_GET['show'] == '40')
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            Showing 40 Products
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['price']))
                        <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                            USD {{ $_GET['price'] }}
                            <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                        </div>
                    @endif
                    @if (!empty($_GET['category']))
                        @php
                            $filterCats = explode(',', $_GET['category']);
                        @endphp
                        @if (count($filterCats) > 1)
                            @foreach ($filterCats as $filterCat)
                                <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                                    {{ App\Models\Admin\Category::where('slug', $filterCat)->value('title') }}
                                    <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                                </div>
                            @endforeach
                        @endif
                        @if (count($filterCats) == 1)
                            <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                                {{ App\Models\Admin\Category::where('slug', $filterCats)->value('title') }}
                                <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                            </div>
                        @endif
                    @endif
                    @if (!empty($_GET['brand']))
                        @php
                            $filterBrands = explode(',', implode($_GET['brand']));
                        @endphp
                        @if (count($filterBrands) > 1)
                            @foreach ($filterBrands as $filterBrand)
                                <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                                    {{ App\Models\Admin\Brand::where('slug', $filterBrand)->value('title') }}
                                    <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                                </div>
                            @endforeach
                        @elseif (count($filterBrands) == 1)
                            <div class="green-label font-weight-bold p-1 px-1 mx-sm-1 mx-0 my-sm-0 my-2">
                                {{ App\Models\Admin\Brand::where('slug', $filterBrands)->value('title') }}
                                <span class="px-1 close" onclick="parentNode.remove()">&times;</span>
                            </div>
                        @else
                        @endif
                    @endif
                </div>
                <div class="filters">
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter"
                        aria-expanded="true" aria-controls="mobile-filter">Filter<span class="px-1 fas fa-filter"></span>
                    </button>
                </div>
                <div id="mobile-filter">
                    <div class="py-3">
                        <h6 class="mb-2">KeyWord Search</h6>
                        @if (!empty($_GET['keyword']))
                            <input class="p-1 form-control" type="text" name="keyword" value="{{ $_GET['keyword'] }}"
                                onchange="this.form.submit()">
                        @else
                            <input class="p-1 form-control" type="text" name="keyword" placeholder="BY KEYWORD..."
                                onchange="this.form.submit()">
                        @endif
                    </div>
                    <div class="py-3">
                        <h5 class="font-weight-bold">Categories</h5>
                        <div class="accordion accordion-flush" id="accordionFlushCategory">
                            <div class="accordion-item">
                                @foreach ($categories as $key => $cat)
                                    <h2 class="accordion-header" id="flush-headingCategory">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{ $cat->id }}" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            <label class="tick"><input type="checkbox"> <span class="check"
                                                    style="top: -1px;"></span>{{ $cat->title }} </label>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $cat->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingCategory" data-bs-parent="#accordionFlushCategory">
                                        <div class="accordion-body p-1 ps-3 pl-3">
                                            {{-- Body --}}
                                            <div class="accordion accordion-flush" id="accordionFlushSubCategory">
                                                <div class="accordion-item">
                                                    @php
                                                        $sub_categorys = App\Models\Admin\Category::getSubcatByCat($cat->id);
                                                    @endphp
                                                    @foreach ($sub_categorys as $key => $sub_category)
                                                        <h2 class="accordion-header"
                                                            id="flush-heading{{ $sub_category->id }}">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapse{{ $sub_category->id }}"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapse{{ $sub_category->id }}">
                                                                <label class="tick"><input type="checkbox"> <span
                                                                        class="check"
                                                                        style="top: -1px;"></span>{{ $sub_category->title }}
                                                                </label>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapse{{ $sub_category->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-heading{{ $sub_category->id }}"
                                                            data-bs-parent="#accordionFlushSubCategory">
                                                            <div class="accordion-body p-1 ps-3 pl-3">
                                                                {{-- Body --}}
                                                                <div class="accordion accordion-flush" id="inner_sub-2">
                                                                    <div class="accordion-item">
                                                                        @php
                                                                            $sub_sub_categorys = App\Models\Admin\SubCategory::getSubSubcatBySubCat($sub_category->id);
                                                                        @endphp
                                                                        @if (!empty($sub_sub_categorys))
                                                                            @foreach ($sub_sub_categorys as $item)
                                                                                <h2 class="accordion-header sub-accordion-header"
                                                                                    id="flush-heading{{ $sub_category->id }}">
                                                                                    <label class="tick"><input
                                                                                            type="checkbox"> <span
                                                                                            class="check"
                                                                                            style="top: -1px;"></span>{{ $item->title }}
                                                                                    </label>
                                                                                </h2>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        @if (!empty($_GET['brand']))
                            @php
                                $filterBrand = explode(',', implode($_GET['brand']));
                            @endphp
                        @endif
                        <form class="brand">
                            @foreach ($brands as $brand)
                                <div class="form-inline d-flex align-items-center py-2 px-2"
                                    style="border-bottom: 1px solid #00000026;"> <label
                                        class="tick">{{ $brand->title }}
                                        <input type="checkbox" name="brand[]" value="{{ $brand->slug }}"
                                            @if (!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif
                                            onchange="this.form.submit()">
                                        <span class="check"></span> </label>
                                </div>
                            @endforeach
                        </form>
                    </div>
                    <div class="py-3">
                        <h5 class="font-weight-bold">Rating</h5>
                        <form class="rating">
                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span>
                                </label> </div>
                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                        class="check"></span> </label> </div>
                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span>
                                    <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                        class="check"></span> </label> </div>
                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                        class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                        class="check"></span> </label> </div>
                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                        class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span>
                                    <span class="far fa-star px-1 text-muted"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <span
                                        class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                        class="check"></span> </label> </div>
                        </form>
                    </div>
                </div>
                <div class="row gx-0 py-md-0 py-3">
                    <section id="sidebar">
                        <div class="py-3">
                            @if (!empty($_GET['keyword']))
                                <input class="p-1 form-control rounded-0  w-100" type="text" name="keyword"
                                    value="{{ $_GET['keyword'] }}" onchange="this.form.submit()" style="padding: 25px">
                            @else
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control  rounded-0"
                                        placeholder="Search BY KEYWORD..." onchange="this.form.submit()"
                                        style="padding: 8px">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary rounded-0 p-2" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item rounded-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button main_color" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Categories
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show shadow"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body p-3 py-0">
                                        <div class="py-3">
                                            <div class="accordion accordion-flush" id="accordionFlushCategory">
                                                <div class="accordion-item">
                                                    @if (!empty($_GET['category']))
                                                        @php
                                                            $filterCat = explode(',', $_GET['category']);
                                                        @endphp
                                                    @endif
                                                    @foreach ($categories as $key => $cat)
                                                        <h2 class="accordion-header" id="flush-headingCategory">

                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapse{{ $cat->id }}"
                                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                                <label class="tick">
                                                                    <input type="checkbox" name="category[]"
                                                                        value="{{ $cat->slug }}"
                                                                        @if (!empty($filterCat) && in_array($cat->slug, $filterCat)) checked @endif
                                                                        onchange="this.form.submit()">
                                                                    <span class="check"
                                                                        style="top: -1px;"></span>{{ $cat->title }}
                                                                </label>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapse{{ $cat->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-headingCategory"
                                                            data-bs-parent="#accordionFlushCategory">
                                                            <div class="accordion-body p-1 ps-3 pl-3">
                                                                {{-- Body --}}

                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushSubCategory">
                                                                    <div class="accordion-item">
                                                                        @php
                                                                            $sub_categorys = App\Models\Admin\Category::getSubcatByCat($cat->id);
                                                                        @endphp
                                                                        @if (!empty($_GET['sub_category']))
                                                                            @php
                                                                                $filtersubCat = explode(',', $_GET['sub_category']);
                                                                            @endphp
                                                                        @endif
                                                                        @foreach ($sub_categorys as $key => $sub_category)
                                                                            <h2 class="accordion-header"
                                                                                id="flush-heading{{ $sub_category->id }}">
                                                                                <button class="accordion-button collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#flush-collapse{{ $sub_category->id }}"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="flush-collapse{{ $sub_category->id }}">
                                                                                    <label class="tick">
                                                                                        <input type="checkbox"
                                                                                            name="sub_category[]"
                                                                                            value="{{ $sub_category->slug }}"
                                                                                            @if (!empty($filtersubCat) && in_array($sub_category->slug, $filtersubCat)) checked @endif
                                                                                            onchange="this.form.submit()">
                                                                                        <span class="check"
                                                                                            style="top: -1px;"></span>{{ $sub_category->title }}
                                                                                    </label>
                                                                                </button>
                                                                            </h2>
                                                                            <div id="flush-collapse{{ $sub_category->id }}"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="flush-heading{{ $sub_category->id }}"
                                                                                data-bs-parent="#accordionFlushSubCategory">
                                                                                <div class="accordion-body p-1 ps-3 pl-3">
                                                                                    {{-- Body --}}

                                                                                    <div class="accordion accordion-flush"
                                                                                        id="inner_sub-2">
                                                                                        <div class="accordion-item">
                                                                                            @php
                                                                                                $sub_sub_categorys = App\Models\Admin\SubCategory::getSubSubcatBySubCat($sub_category->id);
                                                                                            @endphp
                                                                                            @if (!empty($_GET['sub_sub_category']))
                                                                                                @php
                                                                                                    $filtersubsubCat = explode(',', $_GET['sub_sub_category']);
                                                                                                @endphp
                                                                                            @endif
                                                                                            @if (!empty($sub_sub_categorys))
                                                                                                @foreach ($sub_sub_categorys as $item)
                                                                                                    <h2 class="accordion-header sub-accordion-header"
                                                                                                        id="flush-heading{{ $sub_category->id }}">
                                                                                                        <label
                                                                                                            class="tick">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="sub_sub_category[]"
                                                                                                                value="{{ $item->slug }}"
                                                                                                                @if (!empty($filtersubsubCat) && in_array($item->slug, $filtersubsubCat)) checked @endif
                                                                                                                onchange="this.form.submit()">
                                                                                                            <span
                                                                                                                class="check"
                                                                                                                style="top: -1px;"></span>{{ $item->title }}
                                                                                                        </label>
                                                                                                    </h2>
                                                                                                @endforeach
                                                                                            @endif

                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed main_color" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Manufacturers
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse shadow"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body p-3 py-0">
                                        <div class="py-3">
                                            @if (!empty($_GET['brand']))
                                                @php
                                                    $filterBrand = explode(',', implode($_GET['brand']));
                                                @endphp
                                            @endif
                                            <form class="brand">
                                                @foreach ($brands as $brand)
                                                    <div class="form-inline d-flex align-items-center py-2 px-2"
                                                        style="border-bottom: 1px solid #00000026;"> <label
                                                            class="tick">{{ $brand->title }}
                                                            <input type="checkbox" name="brand[]"
                                                                value="{{ $brand->slug }}"
                                                                @if (!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif
                                                                onchange="this.form.submit()">
                                                            <span class="check"></span> </label>
                                                    </div>
                                                @endforeach

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed main_color" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Price Range
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse shadow"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body p-3 py-0">
                                        <div class="py-3">
                                            <div class="product_list_price">
                                                <div id="slider-range" class="price-filter-range text-success"
                                                    data-min="0" data-max="20000" style="margin-bottom:0.7rem;"></div>
                                                <input type="hidden" id="price_range" name="price_range"
                                                    value="">
                                                @if (!empty($_GET['price']))
                                                    <input class="form-control form-control-sm mb-2" type="text"
                                                        id="amount" value="USD $ {{ $_GET['price'] }}" readonly>
                                                @else
                                                    <input class="form-control form-control-sm mb-2" type="text"
                                                        id="amount" value="USD $0 - $20000" readonly>
                                                @endif
                                            </div>

                                            <div id="sticker">
                                                <div class="product_apply_filter_btn d-flex justify-content-center">
                                                    <button class="common_button2 p-2 w-100" type="submit">Apply
                                                        Filters</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <!-- Products Section -->
                    <section id="products">
                        <div class="container py-3">
                            <header class="product_showing shadow-lg px-2 py-2 mb-2">
                                <div class="form-inline d-flex justify-content-between align-items-center">
                                    <span class="mr-md-auto">
                                        @if ($products)
                                            {{ $products->count() }} Items
                                        @else
                                            No Item
                                        @endif
                                        found
                                    </span>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 ml-2">
                                            <select class="show form-select rounded-0 product_btn_dropdown" name="show"
                                                onchange="this.form.submit();" data-placeholder="Results Per Page"
                                                aria-label="Default select example">
                                                <option value="">Default Show</option>
                                                <option value="7" @if (!empty($_GET['show']) && $_GET['show'] == '7') selected @endif>
                                                    Per Page: 7</option>
                                                <option value="10" @if (!empty($_GET['show']) && $_GET['show'] == '10') selected @endif>
                                                    Per Page: 10</option>
                                                <option value="20" @if (!empty($_GET['show']) && $_GET['show'] == '20') selected @endif>
                                                    Per Page: 20</option>
                                                <option value="40" @if (!empty($_GET['show']) && $_GET['show'] == '40') selected @endif>
                                                    Per Page: 40</option>
                                            </select>
                                        </div>
                                        <div class="me-2 ml-2">
                                            <select class="show form-select rounded-0" name="show"
                                                onchange="this.form.submit();" data-placeholder="Results Per Page"
                                                aria-label="Default select example">
                                                <option value="">Deafult Sorting</option>
                                                <option value="titleASC"
                                                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC') selected @endif>Ascending By Name
                                                </option>
                                                <option value="priceASC"
                                                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC') selected @endif> Ascending By
                                                    Price
                                                </option>
                                                <option value="titleDESC"
                                                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC') selected @endif>Descending By
                                                    Name
                                                </option>
                                                <option value="priceDESC"
                                                    @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC') selected @endif>Descending By
                                                    Price
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <!-- sect-heading -->
                            {{-- @php
                                dd($products->appends(request()->query()));
                            @endphp --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                </div>
                            </div>
                            <div class="row">

                                <div class="container mt-1 mb-5">
                                    <div class="d-flex justify-content-center row">
                                        @if (count($products) > 0)
                                            <!-- First Product Start -->
                                            @foreach ($products as $product)
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="row m-0 p-2  rounded-0  bg-white rounded-0 d-flex align-items-center"
                                                        style="border-bottom: 2px solid #dee2e6;">
                                                        <div class="col-md-3 mt-1 ">
                                                            <img class="img-fluid img-responsive rounded-0 product-image"
                                                                src="{{ asset($product->thumbnail) }}"
                                                                alt="{{ $product->name }}">
                                                        </div>
                                                        <div class="col-md-9 col-sm-12">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-9 col-sm-12">
                                                                    <a
                                                                        href="{{ route('product.details', ['id' => $product->slug]) }}">
                                                                        <h5 class="my-3" style="color: #ae0a46;">
                                                                            {{ Str::words($product->name, 12, $end = '') }}
                                                                        </h5>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-12">
                                                                    @if ($product->qty > 0)
                                                                        <h6 class="text-success font-number text-end"
                                                                            style="font-size:16px; text-transform:capitalize;">
                                                                            <i class="fa-solid fa-circle-check"
                                                                                style="font-size:15px !important;"></i> in
                                                                            stock
                                                                        </h6>
                                                                    @else
                                                                        <h6 class="text-end text-success"
                                                                            style="font-size:16px; text-transform:capitalize;">
                                                                            {{ ucfirst($product->stock) }}</h6>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-7 mt-1 col-sm-12">
                                                                    <div>
                                                                        <span style="font-size: 12px;">
                                                                            SKU #: {{ $product->sku_code }} |
                                                                            MF #: {{ $product->mf_code }}
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 text-center mt-1 col-sm-12">
                                                                    <div class="text-end">
                                                                        @if ($product->rfq != 1)
                                                                            @if (!empty($product->discount))
                                                                                <h3 class="mr-1 font-number text-end">$
                                                                                    {{ $product->discount }}</h3>
                                                                                <span class="strike-text">$
                                                                                    {{ $product->price }}</span>
                                                                            @else
                                                                                <div
                                                                                    class="d-flex justify-content-end align-items-center">
                                                                                    <small class="text-info me-2"
                                                                                        style="font-size: 16px;">USD</small>
                                                                                    <h4 class="mr-1 font-number text-end">$
                                                                                        {{ $product->price }}</h4>
                                                                                </div>
                                                                            @endif
                                                                        @endif

                                                                    </div>
                                                                    @if ($product->rfq != 1)
                                                                        @php
                                                                            $cart = Cart::content();
                                                                            $exist = $cart->where('id', $product->id);

                                                                        @endphp
                                                                        @if ($cart->where('id', $product->id)->count())
                                                                            <div class="text-end">
                                                                                <span class="common_button6">Already in
                                                                                    Cart</span>
                                                                            </div>
                                                                        @else
                                                                            <form action="{{ route('add.cart') }}"
                                                                                method="post">
                                                                                @csrf
                                                                                <input type="hidden" name="product_id"
                                                                                    id="product_id"
                                                                                    value="{{ $product->id }}">
                                                                                <input type="hidden" name="name"
                                                                                    id="name"
                                                                                    value="{{ $product->name }}">
                                                                                <input type="hidden" name="qty"
                                                                                    id="qty" value="1">
                                                                                <div
                                                                                    class="row gx-0 d-flex align-items-center justify-content-end">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="qty-container d-flex justify-content-end"
                                                                                            style="margin-right: -0.5rem;
                                                                                        position: relative;
                                                                                        z-index: 999;">
                                                                                            <input type="text"
                                                                                                name="qty"
                                                                                                value="0"
                                                                                                class="input-qty" />
                                                                                            <span
                                                                                                class="d-flex flex-column">
                                                                                                <button
                                                                                                    class="qty-btn-plus btn rounded-0 text-white qty-btn"
                                                                                                    type="button"><i
                                                                                                        class="fa fa-chevron-up"></i></button>
                                                                                                <button
                                                                                                    class="qty-btn-minus btn rounded-0 text-white qty-btn mr-1"
                                                                                                    type="button"><i
                                                                                                        class="fa fa-chevron-down"></i></button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div
                                                                                            class="d-flex justify-content-end">
                                                                                            <button type="submit"
                                                                                                class="btn-color"
                                                                                                style="padding:10px 8px;">Add
                                                                                                to Basket</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        @endif
                                                                    @else
                                                                        <div class="text-end">
                                                                            <a href=""
                                                                                class="d-flex justify-content-center align-items-center"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#rfq{{ $product->id }}">
                                                                                <button
                                                                                    class="btn-color popular_product-button">
                                                                                    Ask For Price
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- First Product End -->
                                        @else
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                                                    <h4 class="text-danger text-center">No Product Found. Search again.
                                                    </h4>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            {{ $products->appends(request()->query())->links() }}
                                        </ul>

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>
    </div>

    <!-------- End--------->

    <!--=======// Related products //======-->
    @if (is_countable($related_products) && count($related_products) > 0)
        <section>
            <div class="container">
                <div class="Container mt-5 px-0">
                    <h3 class="Head" style="font-size:30px;">Related Products <span class="Arrows"></span></h3>
                    <!-- Carousel Container -->
                    <div class="SlickCarousel">
                        @if ($related_products)
                            @foreach ($related_products as $item)
                                <!-- Item -->
                                <div class="ProductBlock mb-3 mt-3">
                                    <div class="Content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="custom-product-grid">
                                                    <div class="custom-product-image">
                                                        <a href="{{ route('product.details', $item->slug) }}"
                                                            class="image">
                                                            {{-- <img class="pic-1" src="{{ asset($item->thumbnail) }}"> --}}
                                                            <img class="img-fluid"
                                                                src="{{ !empty($item->thumbnail) && file_exists(public_path($item->thumbnail)) ? asset($item->thumbnail) : asset('frontend/images/random-no-img.png') }}"
                                                                alt="NGEN IT">
                                                        </a>
                                                        <ul class="custom-product-links">
                                                            <li><a href="#"><i
                                                                        class="fa fa-random text-white"></i></a>
                                                            </li>
                                                            <li><a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#productDetails{{ $item->id }}"><i
                                                                        class="fa fa-search text-white"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="custom-product-content">
                                                        <a href="{{ route('product.details', $item->slug) }}">
                                                            <h3 class="custom-title"> {{ Str::words($item->name, 10) }}
                                                            </h3>
                                                        </a>

                                                        @if ($item->rfq == 1)
                                                            <div>
                                                                <div class="price py-3">
                                                                    {{-- <small class="price-usd">USD</small>
                                                            --.-- $ --}}
                                                                </div>
                                                                <a href=""
                                                                    class="d-flex justify-content-center align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#rfq{{ $item->id }}">
                                                                    <button class="btn-color popular_product-button">
                                                                        Ask For Price
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        @elseif ($item->price_status && $item->price_status == 'rfq')
                                                            <div>
                                                                <div class="price py-3">
                                                                    {{-- <small class="price-usd">USD</small>
                                                        --.-- $ --}}
                                                                </div>
                                                                <a href=""
                                                                    class="d-flex justify-content-center align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#rfq{{ $item->id }}">
                                                                    <button class="btn-color popular_product-button">
                                                                        Ask For Price
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        @elseif ($item->price_status && $item->price_status == 'offer_price')
                                                            <div>
                                                                <div class="price py-3">
                                                                    <small class="price-usd">USD</small>
                                                                    $ {{ number_format($item->price, 2) }}
                                                                </div>
                                                                <a href=""
                                                                    class="d-flex justify-content-center align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#rfq{{ $item->id }}">
                                                                    <button class="btn-color" data-bs-toggle="modal"
                                                                        data-bs-target="#askProductPrice">
                                                                        Your Price
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div>
                                                                <div class="price py-3">
                                                                    <small class="price-usd">USD</small>
                                                                    $ {{ number_format($item->price, 2) }}
                                                                </div>
                                                                <a href="" data-mdb-toggle="popover"
                                                                    title="Add To Cart Now"
                                                                    class="cart_button{{ $item->id }}"
                                                                    data-mdb-content="Add To Cart Now"
                                                                    data-mdb-trigger="hover">
                                                                    <button type="button" class="btn-color add_to_cart"
                                                                        data-id="{{ $item->id }}"
                                                                        data-name="{{ $item->name }}"
                                                                        data-quantity="1">
                                                                        Add to Cart
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Carousel Container -->
                    @include('frontend.pages.home.rfq_modal')


                </div>
            </div>
        </section>
    @endif
    <!---------End -------->





@endsection
