<div class="woocommerce-notices-wrapper"></div>
<div id="product-63701"
    class="product type-product post-63701 status-publish first instock product_cat-sua-de product_cat-sua-de-dg-newzealand product_tag-dg2 product_tag-sua-de-dg has-post-thumbnail shipping-taxable purchasable product-type-simple">
    @foreach($pro as $pr)
    <a href="">
        <div class="bg-white mb-2 p-2 w-100 rounded">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="p-3">
                        <div class="w-100 mb-0 pb-0 woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                            data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <div class="product-images">
                                    <!-- Hiển thị hình ảnh sản phẩm -->
                                    <img src="{{ asset('storage/' . $pr->image) }}" alt="{{ $pr->title }}"
                                        class="main-image" width="500">

                                    <!-- Nếu sản phẩm có nhiều hình ảnh -->
                                    @if($pr->images)
                                    <div class="additional-images">
                                        @foreach(json_decode($pr->images) as $image)
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $pr->title }}"
                                            class="additional-image" width="150">
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="summary entry-summary w-100">
                        <h1 class="product_title entry-title text-dark font-weight-bold pt-2">{{$pr->title}}</h1>
                        <p class="price">
                            <span class="woocommerce-Price-amount amount"><bdi>{{$pr->price}}<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                        </p>
                        <form class="cart" action="https://suabottot.com/san-pham/sua-de-dg-2-800g/" method="post"
                            enctype='multipart/form-data'>
                            <label for="quantity">Số lượng: </label>
                            <div class="quantity">
                                <label class="screen-reader-text" for="quantity_6743ccd29831b">Sữa dê DG-2 New Zealand
                                    800G
                                    (6-36 tháng) số lượng</label>
                                <input type="number" id="quantity_6743ccd29831b" class="input-text qty text"
                                    name="quantity" value="{{$pr->quantity}}" aria-label="Số lượng sản phẩm" size="4"
                                    min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off" />
                            </div>
                            <div class="clearfix"></div>

                            <div class="row mt-3 mb-3">
                                <div class="col-12">
                                    <button type="submit" name="add-to-cart" value="63701"
                                        class="single_add_to_cart_button btn btn-primary btn-lg mr-3"><i
                                            class="fas fa-cart-plus"></i> Thêm Giỏ Hàng</button>
                                    <button type="button" class="button buy_now_button">Mua ngay</button>
                                    <script type="rocketlazyloadscript">window.addEventListener('DOMContentLoaded', function() {
                                    jQuery(document).ready(function(){
                                        jQuery('body').on('click', '.buy_now_button', function(e){
                                            e.preventDefault();
                                            var thisParent = jQuery(this).parents('form.cart');
                                            jQuery('.single_add_to_cart_button', thisParent).trigger('click');                
                                        });
                                        });
                                    });
                                </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="woocommerce_single_68" class="col-sm-12 col-md-3">
                    <section id="black-studio-tinymce-6"
                        class="boderr-dot bg-white  mt-1 mb-3 rounded widget_black_studio_tinymce">
                        <h4 class="widget-title rounded-top border-bottom p-2 pt-0 text-center"><span>CAM KẾT DỊCH
                                VỤ</span>
                        </h4>
                        <div class="textwidget">
                            <ul>
                                <li><i class="far fa-gem"></i> Cam kết 100% hàng chính hãng</li>
                                <li><i class="fas fa-truck"></i> Ship Toàn Quốc, Miễn Phí Hà Nội</li>
                                <li><i class="far fa-clock"></i> Đổi trả Miễn Phí trong 7 ngày</li>
                                <li><i class="fas fa-award"></i> Dịch vụ khách hàng tốt nhất</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="bg-white mb-2 p-2 w-100 rounded">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="clearfix"> </div>
                    <div id="tab_sp_lindo" class="sing_title_css">
                        <h2 class="sing_title_css"><span>Thông tin sản phẩm</span></h2>
                    </div>
                    <div class="clearfix"> </div>

                    <div id="motachitiet" class="motasanpham">
                        {{$pr->content}}
                    </div>
                    <div class="clearfix"> </div>
                </div>


            </div>
        </div>
    </a>
    @endforeach
</div>