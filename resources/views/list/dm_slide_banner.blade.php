<section
    class="elementor-section elementor-top-section elementor-element elementor-element-7e3d651 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="7e3d651" data-element_type="section" id="homebox-1">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c3043a4"
            data-id="c3043a4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-ed6153b pr-0 elementor-hidden-phone elementor-widget elementor-widget-wp-widget-maxmegamenu"
                    data-id="ed6153b" data-element_type="widget" data-widget_type="wp-widget-maxmegamenu.default">
                    <div class="elementor-widget-container">
                        <h5>danh mục</h5>
                        <div id="mega-menu-wrap-menu-1" class="mega-menu-wrap">
                            <div class="mega-menu-toggle">
                                <div class="mega-toggle-blocks-left">
                                    <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1'
                                        id='mega-toggle-block-1'><button aria-label="Toggle Menu"
                                            class="mega-toggle-animated mega-toggle-animated-slider" type="button"
                                            aria-expanded="false">
                                            <span class="mega-toggle-animated-box">
                                                <span class="mega-toggle-animated-inner"></span>
                                            </span>
                                        </button></div>
                                </div>
                                <div class="mega-toggle-blocks-center"></div>
                                <div class="mega-toggle-blocks-right"></div>
                            </div>
                            <ul id="mega-menu-menu-1" class="mega-menu max-mega-menu mega-menu-vertical mega-no-js"
                                data-event="hover" data-effect="fade_up" data-effect-speed="200"
                                data-effect-mobile="disabled" data-effect-speed-mobile="0"
                                data-mobile-force-width="body" data-second-click="go" data-document-click="collapse"
                                data-vertical-behaviour="standard" data-breakpoint="600" data-unbind="true"
                                data-mobile-state="collapse_all" data-hover-intent-timeout="300"
                                data-hover-intent-interval="100">
                                @foreach($categories as $key => $category)
                                <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-align-bottom-left mega-menu-flyout mega-has-icon mega-icon-left mega-menu-item-30124'
                                    id='mega-menu-item-30124'>
                                    <a style="text-transform: uppercase; font-size:13px;"
                                        class="mega-custom-icon mega-menu-link" href="">
                                        {{ $category['name'] ?? '' }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9be0b5c"
            data-id="9be0b5c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-2c026a5 elementor-widget elementor-widget-text-editor"
                    data-id="2c026a5" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <div id="metaslider-id-2875" style="width: 100%; margin: 0 auto;"
                            class="ml-slider-3-90-1 metaslider metaslider-flex metaslider-2875 ml-slider ms-theme-default nav-hidden"
                            role="region" aria-roledescription="Slideshow" aria-label="Home Slider">
                            <div id="metaslider_container_2875">
                                <div id="metaslider_2875" class="flexslider">
                                    <!-- Chỉ có một thẻ <ul> duy nhất cho tất cả các slide -->
                                    <ul class="slides">
                                        @foreach($sli as $sl)
                                        <li style="display: block; width: 100%;" class="slide-38969 ms-image"
                                            aria-roledescription="slide" aria-label="slide-38969">
                                            <a href="{{ route('layouts.slide_img.slide_img', $sl->id) }}"
                                                target="_self">
                                                @if($sl->image)
                                                <img src="{{ asset('storage/' . $sl->image) }}" alt="{{ $sl->title }}"
                                                    width="100%">
                                                @else
                                                No Image
                                                @endif
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner bên phải slide-->
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f899c73 elementor-hidden-phone elementor-hidden-tablet"
            data-id="f899c73" data-element_type="column" id="banner_right_home">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-208ad96 elementor-invisible elementor-widget elementor-widget-image"
                    data-id="208ad96" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image.default">
                    @foreach($ban as $ba)
                    <div class="elementor-widget-container">
                        <a href="{{ route('layouts.banner.banner', $ba->id) }}">
                            @if($ba->image)
                            <img src="{{ asset('storage/' . $ba->image) }}" alt="{{ $ba->title }}" width="100%">
                            @else
                            No Image
                            @endif
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--End banner bên phải slide-->
    </div>
</section>

<style>
#metaslider_2875 .slides {
    display: flex;
    flex-direction: row;
    margin: 0;
    padding: 0;
    list-style: none;
}

#metaslider_2875 .slides li {
    flex: 0 0 100%;
    transition: transform 0.5s ease-in-out;
}
</style>
<script>
$(document).ready(function() {
    $('#metaslider_2875').flexslider({
        animation: "slide",
        direction: "horizontal",
        controlNav: false,
        directionNav: true,
        pauseOnHover: true,
        slideshowSpeed: 5000,
        animationSpeed: 600,
    });
});
</script>