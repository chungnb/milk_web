<section
    class="elementor-section elementor-top-section elementor-element elementor-element-ff9f361 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="ff9f361" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-76303fe"
            data-id="76303fe" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-050bcbd elementor-widget elementor-widget-heading"
                    data-id="050bcbd" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-medium"><a href="">Sản phẩm</a></h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-978726c elementor-widget elementor-widget-wp-widget-woocommerce_flash_sale"
                    data-id="978726c" data-element_type="widget"
                    data-widget_type="wp-widget-woocommerce_flash_sale.default">
                    <div class="elementor-widget-container">
                        <div class="clearfix"> </div>
                        <section id="lindo_flash_sale" class="w-100 float-left">
                            <div class="clearfix"> </div>
                            <div id="flash-sale-lindo">
                                <div class="owl-carousel owl-theme flash-sale-carousel row--height">
                                    <div class="item itemshopproduc border-right shadow2019 item_demsp_1">
                                        <div id="milk_spbc">
                                            <div class="product-slider">
                                                <ul class="products-list">
                                                    @foreach($pro as $key => $pr)
                                                    <li class="product-item">
                                                        <a href="{{ route('layouts.product.slide_product') }}"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                            <img loading="lazy" decoding="async" width="250"
                                                                height="250" src="{{ asset('storage/' . $pr->image) }}"
                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt="{{ $pr->title }}" />
                                                            <h2 class="woocommerce-loop-product__title">
                                                                {{ $pr->title }}</h2>
                                                            <span class="price"><bdi>{{ $pr->price }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                        </section>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.grid_shop_lindo {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.product-slider {
    display: flex;
    animation: slide 20s linear infinite;
}

.products-list {
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none;
    flex-wrap: nowrap;
}

.product-item {
    flex-shrink: 0;
    width: 250px;
    margin-right: 20px;
}

@keyframes slide {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-100%);
    }
}

.woocommerce-LoopProduct-link {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    transition: all 0.3s ease;
}

.woocommerce-LoopProduct-link:hover {
    transform: scale(1.05);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.woocommerce-loop-product__title {
    font-size: 1.1rem;
    margin: 10px 0;
}

.star-rating {
    margin: 5px 0;
}

.price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #f67f3e;
}
</style>