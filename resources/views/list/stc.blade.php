<section
    class="elementor-section elementor-top-section elementor-element elementor-element-a267902 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="a267902" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-widget-container">
            <div class="row">
                @if($categories)
                @foreach($categories as $category)
                <div class="col-md-4">
                    <h1 class="elementor-heading-title elementor-size-medium 1111"><a href="">{{ $category->name }}</a>
                    </h1>
                    <img src="{{ $category->image }}" alt="">
                </div>

                <div class="col-md-8">
                    @if($category->product)
                    <div class="row">
                        @foreach($category->product->take(9) as $productkey => $product)
                        <!-- Hiển thị 9 sản phẩm đầu tiên -->
                        <div
                            class="col-6 col-md-4 col-lg-4 col-xl-4 border-right border-bottom shadow2019 item_prosp_1">
                            <div class="grid_shop_lindo p-3 text-center">
                                <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                        width="100">
                                    @else
                                    No Image
                                    @endif
                                    <h2 class="woocommerce-loop-product__title">{{ $product->title }}</h2>
                                    <div class="clearfix"></div>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>{{ $product->price }}<span
                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi>
                                        </span>
                                    </span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Nút Xem thêm -->
                    <div class="text-center mt-3">
                        <a href="" class="btn btn-primary">Xem thêm</a>
                    </div>
                    @endif
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>